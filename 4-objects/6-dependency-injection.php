<?php

class Controller
{
    private Request $request;
    private UserRepository $userRepository;
    private EmailSender $emailSender;
    private TemplateRenderer $templateRenderer;

    public function __construct(
        Request $request,
        UserRepository $userRepository,
        EmailSender $emailSender,
        TemplateRenderer $templateRenderer,
    ) {
        $this->request = $request;
        $this->userRepository = $userRepository;
        $this->emailSender = $emailSender;
        $this->templateRenderer = $templateRenderer;
    }

    public function doThings()
    {
        $data = $this->request->getAll();
        $user = $this->userRepository->create($data);
        $this->emailSender->sendWelcome($user);

        return $this->templateRenderer->renderView('welcome.php', $user);
    }
}

class UserRepository
{
    public function create($data): array
    {
        echo "UserRepository => Je crée une nouvel utilisateur en base de données" . PHP_EOL;

        return [
            'name' => 'John'
        ];
    }
}

class TemplateRenderer
{
    public function renderView(string $viewPath, array $user)
    {
        echo "TemplateRenderer => Je récupère et retourne la vue {$viewPath} avec l'utilisateur" . PHP_EOL;

        return <<<HTML
            <html>
            <head></head>
            <body>Bienvenue {$user['name']} !</body>
            </html>
            HTML;

    }
}

class EmailSender
{

    public function sendWelcome(array $user): void
    {
        echo "EmailSender => J'envoie un email de bienvenue à l'utilisateur" . PHP_EOL;
    }
}

class Request
{

    public function getAll(): array
    {
        echo "Request => Je récupère et retourne les données de la requête" . PHP_EOL;

        return [
            'username' => 'John'
        ];
    }
}

$controller = new Controller(
    new Request(),
    new UserRepository(),
    new EmailSender(),
    new TemplateRenderer(),
);

echo $controller->doThings();

echo PHP_EOL;
