# 🗂️ Files Operations - Manipulação de Arquivos em PHP

Este é um projeto em PHP voltado para o aprendizado de operações básicas com arquivos. A aplicação permite criar, visualizar, atualizar e deletar arquivos .txt diretamente por uma interface web estilizada.

## 🚀 Funcionalidades

- 📄 Criar arquivos: Digite o nome e o conteúdo desejado.

- 👁️ Visualizar arquivos: Leia o conteúdo de arquivos existentes com estilo tipo "terminal".

- 🖊️ Atualizar arquivos: Adicione texto ao final de arquivos já existentes.

- ❌ Deletar arquivos: Remova arquivos manualmente pela interface.

## ▶️ Como Usar

1. Clone ou baixe o repositório:
   ```bash
    git clone https://github.com/jpbrglp2/files_manipulation

2. Coloque a pasta no seu ambiente local (ex: htdocs do XAMPP).

3. Acesse no navegador:
   ex: http://localhost/nome_da_pasta/index.php
   
5. Use o formulário para criar, visualizar, atualizar ou deletar arquivos.

## ⚠️ Observações de Segurança

Este projeto é apenas para fins didáticos. Em ambientes reais evite a manipulação de arquivos sensíveis.

## 🛠️ Atualizações Futuras

- ✅ Listagem automática de arquivos disponíveis para visualização via dropdown.

- 📥 Upload de arquivos externos com filtro por tipo seguro (.txt, .log, etc).

- 📦 Download dos arquivos diretamente pela interface.

- ⚙️ Conversão para API REST (usando PHP juntamente com o laravel) para integração com front-ends modernos.

- 🌐 Tradução para inglês e suporte multilíngue.

- 🔐 Isolamento de diretórios e uso de basename() para impedir acesso não autorizado a arquivos do sistema.

- 🔒 Sistema de autenticação simples para proteger as operações de leitura e escrita.

- 🛡️ Sanitização reforçada das entradas do usuário para evitar LFI e injeção.
