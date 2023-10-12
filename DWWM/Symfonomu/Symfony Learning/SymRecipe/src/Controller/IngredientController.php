<?php

namespace App\Controller;

use App\Entity\Ingredient;
use App\Form\IngredientType;
use App\Repository\IngredientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IngredientController extends AbstractController
{
    /**
     * This controller display all ingredients
     * 
     * @param IngredientRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[Route('/ingredient', name: 'ingredient.index', methods: ['GET'])]
    public function index(
        IngredientRepository $repository,
        PaginatorInterface $paginator,
        Request $request
        ): Response
    {
        $user = $this->getUser();
        if (!$user || !$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('security.login');
        }

        $ingredients = $paginator->paginate(
            $repository->findBy(['user' => $this->getUser()]),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('pages/ingredient/index.html.twig', [
            'ingredients' => $ingredients
        ]);
    }

    /**
     * This controller show a form which create an ingredient
     * 
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/ingredient/nouveau', 'ingredient.new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $manager
        ): Response
    {
        $user = $this->getUser();
        if (!$user || !$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('security.login');
        }

        $ingredient = new Ingredient();
        $form = $this->createForm(IngredientType::class, $ingredient);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $ingredient = $form->getData();
            $ingredient->setUser($this->getUser());

            $manager->persist($ingredient);
            $manager->flush();
            $this->addFlash(
                'success',
                'Votre ingrédient a été créé avec succès !'
            );

            return $this->redirectToRoute('ingredient.index');
        }

        return $this->render('pages/ingredient/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * This controller allow us to edit an ingredient
     * 
     * @param IngredientRepository $repository
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('ingredient/edition/{id}', 'ingredient.edit', methods: ['GET', 'POST'])]
    public function edit(
        IngredientRepository $repository,
        int $id,
        Request $request,
        EntityManagerInterface $manager
    ): Response
    {
        $ingredient = $repository->findOneBy(["id" => $id]);

        // Récupérez l'utilisateur connecté
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est connecté
        if ($user) {
            // Vérifiez si l'ingrédient appartient à l'utilisateur connecté
            if ($user === $ingredient->getUser()) {
                // L'utilisateur a les autorisations nécessaires pour modifier l'ingrédient
                $form = $this->createForm(IngredientType::class, $ingredient);
                $form->handleRequest($request);
                if($form->isSubmitted() && $form->isValid()) {
                    $ingredient = $form->getData();

                    $manager->persist($ingredient);
                    $manager->flush();
                    $this->addFlash(
                        'success',
                        'Votre ingrédient a été modifié avec succès !'
                    );
                    
                    return $this->redirectToRoute('ingredient.index');
                }

            } else {
                // L'ingrédient n'appartient pas à l'utilisateur connecté
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

        return $this->render('pages/ingredient/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * This controller allow us to delete an ingredient
     * 
     * @param IngredientRepository $repository
     * @param EntityManagerInterface $ manager
     * @return Response
     */
    #[Route('ingredient/suppression/{id}', 'ingredient.delete', methods: ['GET'])]
    public function delete(
        IngredientRepository $repository,
        EntityManagerInterface $manager,
        int $id
        ): Response
    {
        $ingredient = $repository->findOneBy(["id" => $id]);
        
        $manager->remove($ingredient);
        $manager->flush();

        $this->addFlash(
            'success',
            'Votre ingrédient a été supprimé avec succès !'
        );

        return $this->redirectToRoute('ingredient.index');
    }
}
