# Sistema de Login e Registro PHP (PDO + Hash)

    Este é um projeto simples de sistema de autenticação (Login/Registro) construído em PHP, 
    utilizando PDO e um design limpo e responsivo.

## Segurança: Configuração do Banco de Dados

**É CRUCIAL** que suas credenciais reais do banco de dados fiquem em segredo.

1.  **Credenciais (SECRETO):** O arquivo **`db.php`** armazena suas credenciais reais. 
    Ele está listado no `.gitignore` e **NUNCA SERÁ ENVIADO** para o GitHub.
2.  **Modelo (PÚBLICO):** O arquivo **`db.example.php`** é o modelo público com valores *placeholder*.

### Passos de Configuração Local:

1.  **Banco de Dados:** Crie a tabela `users` executando o script `database_setup.sql`.
2.  **Credenciais:** Seu arquivo `db.php` já está configurado e seguro localmente.

## Estrutura do Projeto

* `db.php`: Conexão com o BD (Local e Ignorado pelo Git)
* `db.example.php`: Modelo de conexão (Com placeholders)
* `index.php`: Login
* `register.php`: Registro
* `dashboard.php`: Página Restrita
* `includes/auth.php`: Lógica de proteção
* `style.css`: Estilos CSS
* `database_setup.sql`: Script para criação da tabela