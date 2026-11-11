# FalaQ - Projeto Laravel base para a 3ª Etapa

Rode os comandos a baixo no terminal na sua pasta de documentos para clonar e configurar o repositório
```sh
<<<<<<< HEAD
#git clone https://github.com/nato-re/falaq-base.git
#cd falaq-base
=======
git clone https://github.com/nato-re/falaq-base.git
cd falaq-base
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
<<<<<<< HEAD
php artisan migrate:fresh --seed
=======
php artisan migrate --seed
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
```
