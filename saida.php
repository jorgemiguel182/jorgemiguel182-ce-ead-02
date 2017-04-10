<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="utf-8">
    
    <title>Declaração</title>
    
    <style>
	
		.centro{
			text-align: center;
		}
    
		.container {
				width: 650px;
				margin: 0 auto;
			}
      
		.titulo {
				text-align: center;
			}
		
		table,th,td{
			text-align: center;
			border: 1px solid black;
		}
		
		tr:nth-child(even) {
			background-color: #DFDFDF
		}
			
		th {
			background-color: #808080;
			color: white;
		}
		
		table {
			border-collapse: collapse;
			align: center;
		}
		
		#aprovado{
			color: red;
		}

    </style>
    
    <?php
      $nomeAluno        = $_POST['nomeAluno'];
      $nomeDisciplina   = $_POST['nomeDisciplina'];
      $nomeCurso        = $_POST['nomeCurso'];
      $linkImagem       = $_POST['linkImagem'];
      $nota1            = $_POST['nota1'];
      $nota2            = $_POST['nota2'];
      $nota3            = $_POST['nota3'];
      $notaTrabalho     = $_POST['notaTrabalho'];
      $nomeProfessor    = $_POST['nomeProfessor'];
      $nomeCoordenador  = $_POST['nomeCoordenador'];
	  $lado				= $_POST['lado'];
	  $perimetro = '0';
	  $area = '0';
	  
	  $perimetro = $lado * 4;
	  
	  $area = $lado * $lado;
	  
      
	  $aprovado = " "; 
      $notaFinal = $nota1 + $nota2 + $nota3 + $notaTrabalho;
      
      if($notaFinal >= '90'){
        $tipoConceito = "excelente";
      }
      else if($notaFinal >= 80 && $notaFinal < 90){
        $tipoConceito = "ótimo";
      }
      else if($notaFinal >= 70 && $notaFinal < 80){
        $tipoConceito = "bom";
      }
      else if($notaFinal >= 60 && $notaFinal < 70){
        $tipoConceito = "ruim";
      }
      else{
        $tipoConceito = "péssimo";
		$aprovado = " NÃO";
		
		}
      
      $desempenho1 = ($nota1 / 15) * 100;
      $desempenho2 = ($nota2 / 25) * 100;
      $desempenho3 = ($nota3 / 35) * 100;
      $desempenhoT = ($notaTrabalho / 25) * 100;
      
    ?>
    
  </head>
  
  <body>
    
    <div class="container">
    
      <figure align='middle'>
        <img src="<?php echo $linkImagem ?>"
             alt="Promove"
             title="Promove"
			 height="120" 
			 width="380">
	  </figure>
      
      <h1 class='titulo'>DECLARAÇÃO</h1>
      
      <p>Declaramos, para os devidos fins, que 
	  <?php echo $nomeAluno;?><span id='aprovado'>
	  <?php echo $aprovado;?></span> concluiu satisfatoriamente
      as atividades da disciplina <?php echo $nomeDisciplina; ?>
	  do curso de <?php echo $nomeCurso; ?>.</p>
	  
      <p>Segue o desempenho de <?php echo $nomeAluno;?>:</p>
      
      <table align=center>
        <thead>
          <th>Critério</th>
          <th>Valor total</th>
          <th>Nota do aluno</th>
          <th>Desempenho (%)</th>
        </thead>
        
        <tbody>
          <tr>
            <td>Prova1</td>
            <td>15</td>
            <td><?php echo $nota1;?> </td>
            <td><?php echo round($desempenho1,2)?></td>
          </tr>
          
          <tr>
            <td>Prova2</td>
            <td>25</td>
            <td><?php echo $nota2;?></td>
            <td><?php echo round($desempenho2,2)?></td>
          </tr>
          
          <tr>
            <td>Prova3</td>
            <td>35</td>
            <td><?php echo $nota3;?></td>
            <td><?php echo round($desempenho3,2)?></td>
          </tr>
          
          <tr>
            <td>Trabalhos</td>
            <td>25</td>
            <td><?php echo $notaTrabalho;?></td>
            <td><?php echo round($desempenhoT,2)?></td>
          </tr>
        </tbody>
      </table>  
     
      <p>Com esse resultado, o conceito de <?php echo $nomeAluno; ?> foi <?php echo $tipoConceito;?>, 
      ja que sua nota total foi de <strong><?php echo $notaFinal;?></strong> pontos.</p>
	  
	  <p class='centro'>
		Belo Horizonte, <?php echo date("d/m/Y"); ?>
	  </p>

	  <p class='centro'><span>_________________________________________<br></span>
		<?php echo $nomeProfessor;?> - Professor(a)
	  </p>
	  

	  <p class='centro'><span>_________________________________________<br></span>
		<?php echo $nomeCoordenador;?> - Coordenador(a)
	  </p>
	  
	  <p class='centro'>
	  O Perimetro: <?php echo $perimetro ?>	  
	  </p>
	  
	  <p class='centro'>
	  A Area: <?php echo $area ?>	  
	  </p>
    </div>
  </body>
  
</html>