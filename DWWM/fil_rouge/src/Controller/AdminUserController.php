<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Faker\Factory;
use Doctrine\DBAL\Connection;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/admin/user')]
class AdminUserController extends AbstractController
{
    #[Route('/', name: 'app_admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        if (!$user || !$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('admin_user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,Connection $connection, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $faker = Factory::create();
        $form = $this->createFormBuilder()->add('NbUser')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
            $data = $form->getData();
            $nb = $data['NbUser'];
            $connection->executeQuery('DELETE FROM reserver');
            $connection->executeQuery('DELETE FROM user');

            for ($i = 0; $i < $nb; $i++) {
                $user = new User();

                $nom = $faker->lastName;
                $prenom = $faker->firstName;
                $adresse = $faker->address;
                $email = $faker->email;
                $password = $faker->password;

                $user->setNom($nom);
                $user->setPrenom($prenom);
                $user->setAdresse($adresse);
                $user->setEmail($email);
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $password
                    )
                );
                $entityManager->persist($user);
            }
            $admin = new User();
            $admin->setNom('admin');
            $admin->setPrenom('admin');
            $admin->setAdresse('admin');
            $admin->setEmail('admin@gmail.com');
            $admin->setRoles(["ROLE_USER","ROLE_ADMIN","ROLE_EMPLOYE"]);
            $password = 'adminzer';
            $admin->setPassword(
                $userPasswordHasher->hashPassword(
                    $admin,
                    $password
                )
            );
            $entityManager->persist($admin);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_user_index', [

            ], Response::HTTP_SEE_OTHER);
        } catch (\Throwable $e) {
            return $this->render('error_page.html.twig', [
                'error_message' => $e->getMessage(),
            ]);
        }
    }

        return $this->render('admin_user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}', name: 'app_admin_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('admin_user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdminUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_user_index', [], Response::HTTP_SEE_OTHER);
    }
}