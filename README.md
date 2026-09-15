# 🐘 Exercício Prático em PHP - Verificador de Maioridade

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)]()
[![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)]()

Este repositório contém o script desenvolvido para a solução do **Desafio 1**, focado na verificação de maioridade do usuário com base no ano de nascimento, controle de acesso e manipulação de arquivos de log no servidor via PHP.

---

## 🚀 Tecnologias Utilizadas

- **PHP** (Linguagem backend)

---

## 📋 Atividade Desenvolvida

### 🆔 1. Verificador de Maioridade (`5a_desafio1.php`)
- **Descrição:** Uma página única em PHP que contém um formulário para coleta do nome e ano de nascimento do usuário, realizando o cálculo de permissão de acesso.
- **Lógica aplicada:** 
  - O sistema intercepta o envio do formulário via requisição `POST`.
  - É feita a validação se o usuário possui 18 anos ou mais (considerando o ano de nascimento $\le 2007$ e validando o limite mínimo $> 1900$).
  - Se **maior de idade**: exibe alerta de *"Acesso permitido"* e registra o nome e ano de nascimento no arquivo `log_acessos.txt`.
  - Se **menor de idade**: exibe alerta de *"Acesso negado"*.
- **Conceitos:** Formulários HTML (método `POST`), manipulação da superglobal `$_POST`, condicionais (`if/else`), manipulação de arquivos em PHP (`fopen`, `fwrite`, `fclose` no modo `append`) e integração simples com scripts JavaScript (`alert`).

---

## 👤 Repositório desenvolvido por:

Nome: Vitor Rodrigues Santos  
Turma: 1ID-DS
