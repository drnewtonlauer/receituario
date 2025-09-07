<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Anísio Neto and Newton Lauer">  	
	<meta name="copyright" content="MedLauer">	
	<title>aih</title>

	<style>
        body {
            font-family: Arial, sans-serif;
        }
		
        label {
            font-size: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
		
		input[type="checkbox"] {
            transform: scale(1.5); 
        }
		
        textarea {
            width: 100%;
            height: 0.5cm;
            box-sizing: border-box;
            resize: vertical;
        }
		
		.titulo{ vertical-align:middle; padding:10px; width:400px;}	
		.subtitulo1 { font-size:14px;}
		.subtitulo2 { font-size:14px;}
		.subtitulo3 { font-size:14px;}
		.subtitulo4 { font-size:14px;}
		.subtitulo5 { font-size:14px;}
		.subtitulo6 { font-size:14px;}
		.subtitulo7 { font-size:14px;}
		.subtitulo8 { font-size:14px;}
		.subtitulo63 { font-size:10px;}
		
    </style>
		
</head>
<body>

	<table>	
		<tr>
			<td> 
			<label for="campo1">1-BE</label>
			<textarea id="campo1" name="campo1" rows="4" cols="50" ></textarea>
			</td>
			
			<td class="titulo" rowspan="3"> LAUDO MÉDICO PARA SOLICITAÇÃO DE AUTORIZAÇÃO DE INTERNAÇÃO HOSPITALAR
		</tr>
		<tr>
			<td> 
			<label for="campo2">2-NÚMERO DO LAUDO</label>
			<textarea id="campo2" name="campo2" rows="4" cols="50"></textarea>
			</td>
						
		</tr>
		<tr> 
			<td> 
			<label for="campo3">3-NÚMERO DO SIS PRÉ NATAL</label>
			<textarea id="campo3" name="campo3" rows="4" cols="50"></textarea>
			</td> 
		</tr> 
	</table>
	
	<table>
		<tr> 
			<td class="subtitulo1" colspan="6"> IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo4">4-NOME DO ESTABELECIMENTO DE SAÚDE SOLICITANTE</label>
			<textarea id="campo4" name="campo4" rows="4" cols="50"></textarea>
			</td>			
			<td> 
			<label for="campo5">5-CNES</label>
			<textarea id="campo5" name="campo5" rows="4" cols="50"></textarea>
			</td>			
		</tr> 
		<tr> 
			<td>
			<label for="campo6">6-NOME DO ESTABELECIMENTO DE SAÚDE EXECUTANTE</label>
			<textarea id="campo6" name="campo6" rows="4" cols="50"></textarea>			
			</td> 
		</tr>
		<tr> 
			<td> 
			<label for="campo7"> 7-CNES</label>
			<textarea id="campo7" name="campo7" rows="4" cols="50"></textarea>
			</td> 
		</tr>
	</table>
	<table>
		<tr> 
			<td class="subtitulo2" colspan="6"> IDENTIFICAÇÃO DO PACIENTE </td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo8"> 8-NOME DO PACIENTE</label>
			<textarea id="campo8" name="campo8" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo9"> 9-Nº DO PRONTUÁRIO</label>
			<textarea id="campo9" name="campo9" rows="4" cols="50"></textarea>
			</td>
		</tr> 
		<tr> 
			<td> 
			<label for="campo10">10-CARTÃO NACIONAL DE SAÚDE CNS </label>
			<textarea id="campo10" name="campo10" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo11">11-DATA DE NASCIMENTO </label>
			<textarea id="campo11" name="campo11" rows="4" cols="50"></textarea>
			 </td>
			<td> 
			<label for="campo12"> 12-SEXO </label>
			<textarea id="campo12" name="campo12" rows="4" cols="50"></textarea>

			 </td>
			<td> 
			<label for="campo13"> 13-RAÇA/COR </label>
			<textarea id="campo13" name="campo13" rows="4" cols="50"></textarea>
			 </td>
			<td> 
			<label for="campo13.1">13.1-ETNIA </label>
			<textarea id="campo13.1" name="campo13.1" rows="4" cols="50"></textarea>
			 </td>
		</tr> 
		<tr> 
			<td> 
			<label for="campo14">14-NOME DA MÃE </label>
			<textarea id="campo14" name="campo14" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo15"> 15-NOME DO PAI </label>
			<textarea id="campo15" name="campo15" rows="4" cols="50"></textarea>
			</td>
		</tr> 
		<tr> 
			<td> 
			<label for="campo16">16-NOME DO RESPONSÁVEL </label>
			<textarea id="campo16" name="campo16" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo17">17-TELEFONE </label>
			<textarea id="campo17" name="campo17" rows="4" cols="50"></textarea>
			 </td>
		</tr> 
		<tr> 
			<td> 
			<label for="campo18"> 18-ENDEREÇO (RUA,Nº,BAIRRO)</label>
			<textarea id="campo18" name="campo18" rows="4" cols="50"></textarea>
			</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo19"> 19-MUNCIPIO DE RESIDÊNCIA </label>
			<textarea id="campo19" name="campo19" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo20"> 20-CÓD. IBGE DO MUNICÍPIO </label>
			<textarea id="campo20" name="campo20" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo21"> 21-UF</label>
			<textarea id="campo21" name="campo21" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo22"> 22-CEP</label>
			<textarea id="campo22" name="campo22" rows="4" cols="50"></textarea>

			</td>
		</tr> 
	</table>
	<table>
		<tr> 
			<td class="subtitulo3" colspan="6"> DADOS DA INTERNAÇÃO</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo23">23-CPF DO MÉDICO SOLICITANTE </label>
			<textarea id="campo23" name="campo23" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo24">24-DATA DA INTERNAÇÃO </label>
			<textarea id="campo24" name="campo24" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo25">25-HORA DA INTERNAÇÃO </label>
			<textarea id="campo25" name="campo25" rows="4" cols="50"></textarea>
			</td> 
			<td> 
			<label for="campo26">26-AIH ANTERIOR </label>
			<textarea id="campo26" name="campo26" rows="4" cols="50"></textarea>
			</td>
		</tr> 
		<tr> 
			<td> 
			<label for="campo27"> 27-CPF DO DIRETOR CLÍNICO</label>
			<textarea id="campo27" name="campo27" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo28"> 28-FUNCIONÁRIO DE CONTRATO DO HOSPITAL</label>
			<textarea id="campo28" name="campo28" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo29">29-AIH-POSTERIOR </label>
			<textarea id="campo29" name="campo29" rows="4" cols="50"></textarea>

			</td>
		</tr> 
	</table>
	<table>
		<tr> 
			<td class="subtitulo4" colspan="6"> UTI-UNIDADE DE TERAPIA INTENSIVA</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo30"> 30-CPF DO MÉDICO SOLICITANTE</label>
			<textarea id="campo30" name="campo30" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo31"> 31-DATA DA ENTRADA </label>
			<textarea id="campo31" name="campo31" rows="4" cols="50"></textarea>
			 </td>
			<td> 
			<label for="campo32"> 32-DATA DA SAÍDA</label>
			<textarea id="campo32" name="campo32" rows="4" cols="50"></textarea>
			 </td>
			<td> 
			<label for="campo33"> 33-DIÁRIAS </label>
			<textarea id="campo33" name="campo33" rows="4" cols="50"></textarea>
			 </td>
			<td> 
			<label for="campo34"> 34-MOTIVO DE SAÍDA </label>
			<textarea id="campo34" name="campo34" rows="4" cols="50"></textarea>
			 </td>
	</table>
	<table>
		<tr> 
			<td class="subtitulo5" colspan="6"> JUSTIFICATIVA DE INTERNAÇÃO</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo35"> 35-PRINCIPAIS SINAIS E SINTOMAS CLÍNICOS </label>
			<textarea id="campo35" name="campo35" rows="4" cols="50"></textarea>
			</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo36"> 36-CONDIÇÕES QUE JUSTIFICAM A INTERNAÇÃO </label>
			<textarea id="campo36" name="campo36" rows="4" cols="50"></textarea>
			</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo37"> 37-PRINCIPAIS RESULTADOS DE PROVAS DIAGNÓSTICAS (RESULTADOS DE EXAMES REALIZADOS)</label>
			<textarea id="campo37" name="campo37" rows="4" cols="50"></textarea>
			</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo38"> 38-DIAGNÓSTICO INICIAL</label>
			<textarea id="campo38" name="campo38" rows="4" cols="50"></textarea>
			</td>
			<td> 
			<label for="campo39"> 39-CID 10 PRINCIPAL </label>
			<textarea id="campo39" name="campo39" rows="4" cols="50"></textarea>
			 </td>
			<td> 
			<label for="campo40"> 40-CID 10 SECUNDÁRIO </label>
			<textarea id="campo40" name="campo40" rows="4" cols="50"></textarea>
			 </td> 
			<td> 
			<label for="campo41"> 41-CID 10 CAUSAS ASSOCIADAS </label>
			<textarea id="campo41" name="campo41" rows="4" cols="50"></textarea>
			 </td>
		</tr> 
	</table>
	<table>
		<tr> 
			<td class="subtitulo6" colspan="6"> PROCEDIMENTO SOLICITADO</td> 
		</tr> 
		<tr> 
			<td> 
			<label for="campo42"> 42-DESCRIÇÃO DO PROCEDIMENTO SOLICITADO</label>
			<textarea id="campo42" name="campo42" rows="4" cols="50"></textarea>
			</td>
			<td>
			<label for="campo43"> 43-CBO </label>
			<textarea id="campo43" name="campo43" rows="4" cols="50"></textarea>
			</td>
			<td>
			<label for="campo44"> 44-CÓDIGO DO PROCEDIMENTO </label>
			<textarea id="campo44" name="campo44" rows="4" cols="50"></textarea>
			</td>
		</tr> 
		<tr> 
			<td> 
			<label for="campo45"> 45-CLÍNICA</label>
			<textarea id="campo44" name="campo44" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo46"> 46-LEITO</label>
			<textarea id="campo46" name="campo46" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo47"> 47-CARÁTER DA INTERNAÇÃO</label>
			<textarea id="campo47" name="campo47" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo48"> 48-DOCUMENTO</label>
			<textarea id="campo48" name="campo48" rows="4" cols="50"></textarea>		
			</td>
			<td> 
			<label for="campo49"> 49-N°DOCUMENTO DO PROFISSIONAL SOLICITANTE/ASSISTENTE</label>
			<textarea id="campo49" name="campo49" rows="4" cols="50"></textarea>	
			</td>			
		</tr> 
		<tr> 
			<td> 
			<label for="campo50"> 50-NOME DO PROFISSIONAL SOLICITANTE/ASSISTENTE</label>
			<textarea id="campo50" name="campo50" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo51"> 51-DATA DA SOLICITAÇÃO</label>
			<textarea id="campo51" name="campo51" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo52"> 52-DATA DA ALTA</label>
			<textarea id="campo52" name="campo52" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo53"> 53-ASSINATURA E CARIMBO </label>
			<textarea id="campo53" name="campo53" rows="4" cols="50"></textarea>		
			</td>			
		</tr> 
	</table>
	<table>
		<tr>
			<td class="subtitulo7" colspan="6"> PREENCHER EM CASO DE CAUSAS EXTERNAS (ACIDENTES OU VIOLÊNCIAS)</td> 
		</tr>
		<tr> 
			<td rowspan="2"> 
			<label for="campo54"> 54-ACIDENTE DE TRÂNSITO </label>
			<input type="checkbox" id="ACIDENTE DE TRÂNSITO" name="ACIDENTE DE TRÂNSITO" value="ACIDENTE DE TRÂNSITO">
			<label for="campo55"> 55-ACIDENTE TRABALHO TÍPICO</label>
			<input type="checkbox" id="ACIDENTE TRABALHO TÍPICO" name="ACIDENTE TRABALHO TÍPICO" value="ACIDENTE TRABALHO TÍPICO">
			<label for="campo56"> 56-ACIDENTE TRABALHO TRAJETO</label>
			<input type="checkbox" id="ACIDENTE TRABALHO TRAJETO" name="ACIDENTE TRABALHO TRAJETO" value="ACIDENTE TRABALHO TRAJETO">		
			</td>
			<td> 
			<label for="campo57"> 57-CNPJ DA SEGURADORA</label>
			<textarea id="campo57" name="campo57" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo59"> 59-N° DO BILHETE </label>
			<textarea id="campo58" name="campo58" rows="4" cols="50"></textarea>		
			</td>	
			<td> 
			<label for="campo60"> 60-SÉRIE </label>
			<textarea id="campo60" name="campo60" rows="4" cols="50"></textarea>		
			</td>				
		</tr> 
		<tr> 
			<td> 
			<label for="campo58"> 58-CNPJ DA EMPRESA</label>
			<textarea id="campo58" name="campo58" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo61"> 61- CNAF DA EMPRESA </label>
			<textarea id="campo61" name="campo61" rows="4" cols="50"></textarea>		
			</td>	
			<td> 
			<label for="campo62"> 62-CBOR </label>
			<textarea id="campo62" name="campo62" rows="4" cols="50"></textarea>		
			</td>				
		</tr> 
		<tr>
			<td class="subtitulo63" colspan="6"> 63-VINCULO COM A PREVIDÊNCIA 
			</td>
		</tr> 
		<tr> 
			<td>
		    <label for="campo63A"> EMPREGADO </label>
			<input type="checkbox" id="EMPREGADO" name="EMPREGADO" value="EMPREGADO">
			</td>
			<td>
			<label for="campo63B"> EMPREGADOR</label>
			<input type="checkbox" id="EMPREGADOR" name="EMPREGADOR" value="EMPREGADOR">
			</td>
			<td>
			<label for="campo63C"> AUTONOMO</label>
			<input type="checkbox" id="AUTONOMO" name="AUTONOMO" value="AUTONOMO">
			</td>
			<td>
			<label for="campo63D"> DESEMPREGADO</label>
			<input type="checkbox" id="DESEMPREGADO" name="DESEMPREGADO" value="DESEMPREGADO">
			</td>
			<td>
			<label for="campo63E"> APOSENTADO</label>
			<input type="checkbox" id="APOSENTADO" name="APOSENTADO" value="APOSENTADO">
			</td>
			<td>
			<label for="campo63F"> NÃO SEGURADO</label>
			<input type="checkbox" id="NÃO SEGURADO" name="NÃO SEGURADO" value="NÃO SEGURADO">
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td class="subtitulo8" colspan="6"> AUTORIZAÇÃO </td> 
		</tr>
		<tr> 
			<td> 
			<label for="campo64"> 64-NOME DO PROFISSIONAL AUTORIZADOR</label>
			<textarea id="campo64" name="campo64" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo65"> 65-COD. ORGÃO EMISSOR</label>
			<textarea id="campo65" name="campo65" rows="4" cols="50"></textarea>		
			</td>	
			<td rowspan="3"> 
			<label for="campo66"> 66-N°DA AUTORIZAÇÃO DE INTERNAÇÃO HOSPITALAR </label>
			<textarea id="campo66" name="campo66" rows="4" cols="50"></textarea>		
			</td>		
			
		</tr> 
		<tr> 
			<td> 
			<label for="campo67"> 67-DOCUMENTO</label>
			<input type="checkbox" id="CNS" name="CNS" value="CNS">
			<input type="checkbox" id="CPF" name="CPF" value="CPF">
			</td>
			<td> 
			<label for="campo68"> 68-Nº DO DOCUMENTO DO PROFISSIONAL SOLICITANTE</label>
			<textarea id="campo68" name="campo68" rows="4" cols="50"></textarea>		
			</td>		
		</tr> 
		<tr> 
			<td> 
			<label for="campo69"> 69-DATA DA AUTORIZAÇÃO</label>
			<textarea id="campo69" name="campo69" rows="4" cols="50"></textarea>			
			</td>
			<td> 
			<label for="campo70"> 70-ASSINATURA E CARIMBO (Nº DO REGISTRO DO CONSELHO)</label>
			<textarea id="campo70" name="campo70" rows="4" cols="50"></textarea>		
			</td>			
		</tr> 
	</table>


</body>
</html>