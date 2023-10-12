<?php

namespace App\Controller;

use App\Form\UserPasswordType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * This controller allow us to edit user's profile
     *
     * @param UserRepository $repository
     * @param integer $id
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/utilisateur/edition/{id}', name: 'user.edit', methods: ['GET', 'POST'])]
    public function edit(UserRepository $repository, int $id, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    {
        $choosenUser = $repository->findOneBy(["id" => $id]);

        // Récupérez l'utilisateur connecté
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est connecté
        if ($user) {
            // Vérifiez si l'utilisateur correspond à l'utilisateur connecté
            if ($user === $choosenUser) {
                // L'utilisateur a les autorisations nécessaire pour modifier l'utilisateur
                $form = $this->createForm(UserType::class, $choosenUser);
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()){
                    if ($hasher->isPasswordValid($choosenUser, $form->getData()->getPlainPassword())) {
                        $choosenUser = $form->getData();
                        $manager->persist($choosenUser);
                        $manager->flush();

                        $this->addFlash(
                            'success',
                            'Les informations de votre compte ont bien été modifiées.'
                        );

                        return $this->redirectToRoute('recipe.index');
                    } else {
                        $this->addFlash(
                            'warning',
                            'Le mot de passe renseigné est incorrect.'
                        );
                    }
                }

            } else {
                // L'utilisateur ne correspond pas à l'utilisateur connecté
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
        
        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
         * This controller allow us to edit user's password
         *
         * @param UserRepository $repository
         * @param integer $id
         * @param Request $request
         * @param EntityManagerInterface $manager
         * @param UserPasswordHasherInterface $hasher
         * @return Response
         */
    #[Route('/utilisateur/edition-mot-de-passe/{id}', 'user.edit.password', methods: ['GET', 'POST'])]
    public function editPassword(UserRepository $repository, int $id, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    {
        $choosenUser = $repository->findOneBy(["id" => $id]);

        // Récupérez l'utilisateur connecté
        $user = $this->getUser();

        // Vérifiez si l'utilisateur est connecté
        if ($user) {
            // Vérifiez si l'utilisateur correspond à l'utilisateur connecté
            if ($user === $choosenUser) {
                // L'utilisateur a les autorisations nécessaires pour modifier l'utilisateur
                $form = $this->createForm(UserPasswordType::class);

                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    if ($hasher->isPasswordValid($choosenUser, $form->getData()['plainPassword'])) {
                        $choosenUser->setUpdatedAt(new \DateTimeImmutable());
                        $choosenUser->setPlainPassword(
                            $form->getData()['newPassword']
                        );

                        $this->addFlash(
                            'success',
                            'Le mot de passe a été modifié.'
                        );
                        
                        $manager->persist($choosenUser);
                        $manager->flush();

                        return $this->redirectToRoute('recipe.index');

                    } else {
                        $this->addFlash(
                            'warning',
                            'Le mot de passe renseigné est incorrect.'
                        );
                    }
                }

            } else {
                // L'utilisateur ne correspond pas à l'utilisateur connecté
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
        
        return $this->render('pages/user/edit_password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
