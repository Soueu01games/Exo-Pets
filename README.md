<b>Banco de Dados de uma Clínica Pet-Shop:</b></br>
Prova para a disciplina Programação Web na faculdade.

<b>Diagrama de classes (Talvez os relacionamentos estjam errados)</b>
```mermaid
classDiagram
    class consulta {
        + Integer id_consulta
        + Integer tutor_id_tutor
        + Integer veterinario_id_veterinario
        + Integer pet_id_pet
        + Date data_consulta
        + Time hora_consulta
        + Text descricao_consulta
    }

    class veterinario {
        + Integer id_veterinario
        + String nome_veterinario
        + String crmv_veterinario
        + String especialidade_veterinario
    }

class tutor {
        + Integer id_tutor
        + String nome_tutor
        + String cpf_tutor
        + String fone_tutor
        + String email_tutor
        + String endereco_tutor
    }

    class pet {
        + Integer id_pet
        + Integer tutor_id_tutor
        + String nome_pet
        + String especie_pet
        + String idade_pet
        + String peso_pet
    }

    consulta "1" *-- "1" veterinario : veterinario_id_veterinario
    consulta "1" *-- "1" pet : pet_id_pet
    consulta "1" *-- "1" tutor : tutor_id_tutor
    pet "1" *-- "n" tutor : tutor_id_tutor


```
<b>Dependências:</b></br>
<b>Bootstrap</b>- use o link abaixo ou pesquise no seu navegador-
https://getbootstrap.com .</br>
<b>SQL</b> feito pelo <b>DBDesigner</b>.

<b>Atenção:</b></br>
Para usar o projeto, lembre-se de alterar o diretório no começo dos códigos e verifique o nome colocado nas tabelas.

<b>Explicação</b></br>
O objetivo desse projeto é praticar o CRUD utilizando uma clínica de exemplo, a 1° versão do projeto é uma clínica normal e pode ser vista aqui -
https://github.com/Soueu01games/Projeto-programacao-web-Emanuela </br>
Essa versão é mais complexa pois adiciona a classe Tutor e Pet ao invés de Paciente. O Pet precisa de um tutor para ser criado, 
e uma consulta precisa do Veterinário, do Pet e do Tutor.</br>
Eu pretendo adicionar o CSS de um projeto do 1° semestre (uma página Index de uma clínica de petshop feita com bootstrap), foi por causa dessa página que mudei o tema da clínica. 
Seria legal criar uma função de login mas acho que não conseguiria fazer . Seria bom se eu conseguisse impedir de um veterinário ter 2 consultas no mesmo horário, mas não faço ideia 
de como implementaria. Acho que o que dá pra fazer é tornar algumas informações obrigatórias de preencher como o Tutor na hora de cadastrar pet e etc.

Última Atualização- 21/11/2024
