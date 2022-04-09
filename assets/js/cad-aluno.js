function cadaluno() {
    
     const nome = document.getElementById("nome_aluno").value
     const curso = document.getElementById("curso_aluno").value
     const serie = document.getElementById("serie_aluno").value
     const matricula = document.getElementById("matricula_aluno").value
     const telefone = document.getElementById("telefone_aluno").value
     const endereco = document.getElementById("endereco_aluno").value
     const email = document.getElementById("email_aluno").value
     const senha = document.getElementById("senha_aluno").value

     const form = new FormData()

     form.append('nome', nome);
     form.append('curso', curso);
     form.append('serie', serie);
     form.append('matricula', matricula);
     form.append('telefone', telefone);
     form.append('endereco', endereco);
     form.append('email', email);
     form.append('senha', senha);

     const url = 'http://localhost:8080/onlibrary/assets/php/cadastro_aluno.php';

     fetch(url, {
          method: 'POST',
          body:form
     }).then(response =>{
          response.json().then(result =>{
               console.log(result)
          })
     }).catch(err => console.log(err))
}