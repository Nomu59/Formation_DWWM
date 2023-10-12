<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RecipeController extends AbstractController
{
    /**
     * This controller display all recipes
     * 
     * @param RecipeRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[Route('/recette', name: 'recipe.index', methods: ['GET'])]
    public function index(
        RecipeRepository $repository,
        PaginatorInterface $paginator,
        Request $request
        ): Response
    {
        $user = $this->getUser();
        if (!$user || !$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('security.login');
        }

        $recipes = $paginator->paginate(
            $repository->findBy(['user' => $this->getUser()]),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('pages/recipe/index.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    #[Route('/recette/{id}', 'recipe.show', methods: ['GET'])]
    public function show(RecipeRepository $repository, int $id): Response
    {
        $recipe = $repository->findOneBy(["id" => $id]);

        return $this->render('pages/recipe/show.html.twig', [
            'recipe' => $recipe
        ]);
    }

    /**
     * This controller allow us to create a new recipe
     * 
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/recette/creation', 'recipe.new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();
        if (!$user || !$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('security.login');
        }

        $recipe = new Recipe;
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $recipe = $form->getData();
            $recipe->setUser($this->getUser());

            $manager->persist($recipe);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre recette a été créée avec succès !'
            );

            return $this->redirectToRoute('recipe.index');
        }

        return $this->render('pages/recipe/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * This controller allow us to edit a recipe
     * 
     * @param RecipeRepository $recipe
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/recette/edition/{id}', 'recipe.edit', methods: ['GET', 'POST'])]
    public function edit(
        RecipeRepository $repository,
        int $id,
        Request $request,
        EntityManagerInterface $manager
    ): Response
    {
        $recipe = $repository->findOneBy(["id" => $id]);

        // Récupérez l'utilisateur connecté
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est connecté
        if ($user) {
            // Vérifiez si la recette appartient à l'utilisateur connecté
            if ($user === $recipe->getUser()) {
                $form = $this->createForm(RecipeType::class, $recipe);
                $form->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()) {
                    $recipe = $form->getData();

                    $manager->persist($recipe);
                    $manager->flush();
                    $this->addFlash(
                        'success',
                        'Votre recette a été modifié avec succès !'
                    );

                    return $this->redirectToRoute('recipe.index');
                }
            } else {
                // La recette n'appartient pas à l'utilisateur connecté
                // Créez une réponse avec un message d'erreur personnalisé
                $response = throw $this->createNotFoundException('Acces denied.');
                return $response;
            }
        } else {
            // L'utilisateur n'est pas connecté
            // Créez une réponse avec un message d'erreur personnalisé
            $response = throw $this->createNotFoundException('Access denied');
            return  $response;
        }

        return $this->render('pages/recipe/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * This controller allow us to delete a recipe
     * 
     * @param RecipeRepository $repository
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('recipe/suppression/{id}', 'recipe.delete', methods: ['GET'])]
    public function delete(
        RecipeRepository $repository,
        EntityManagerInterface $manager,
        int $id
        ): Response
    {
        $recipe = $repository->findOneBy(["id" => $id]);
        
        $manager->remove($recipe);
        $manager->flush();

        $this->addFlash(
            'success',
            'Votre recette a été supprimé avec succès !'
        );

        return $this->redirectToRoute('recipe.index');
    }
}
