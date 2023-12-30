<?php
function returnQuestions(){
    $htmlQuestionario = "
        <html>
            <h2>Questionário de Prontidão para Atividade Física (PAR-Q)</h2>
            
            <p>Este questionário tem por objetivo identificar a necessidade de avaliação por um médico antes do início
              da atividade física. Caso você responda “sim” a uma ou mais perguntas, converse com seu médico
              ANTES de aumentar seu nível atual de atividade física. Mencione este questionário e as perguntas às
              quais você respondeu “sim”.
            </p>
            
            <p><b>Por favor, assinale “sim” ou “não” às seguintes perguntas:</b></p>
            <br>
            <dl>
                <dt><b>1)</b> Algum médico já disse que você possui algum problema de coração e que só deveria realizar atividade
                física supervisionado por profissionais de saúde?</dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd>
                <dt><b>2)</b> Você sente dores no peito quando pratica atividade física?</dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd>
                <dt><b>3)</b> No último mês, você sentiu dores no peito quando pratica atividade física?</dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd> 
                <dt><b>4)</b> Você apresenta desequilíbrio devido à tontura e/ou à perda de consciência?</dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd> 
                <dt><b>5)</b> Você possui algum problema ósseo ou articular que poderia ser piorado pela atividade física?</dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd> 
                <dt><b>6)</b> Você toma atualmente algum medicamento para pressão arterial e/ou problema de coração? </dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd>
                <dt><b>7)</b> Sabe de alguma outra razão pela qual você não deve praticar atividade física?</dt>
                    <dd>Sim (&nbsp;&nbsp;&nbsp;&nbsp;) | Não (&nbsp;&nbsp;&nbsp;&nbsp;)</dd> 
            </dl>
            <h3>* Observação</h3>
            <p>Para conclusão do processo de INSCRIÇÃO, o aluno ou responsável deverá entregar a Coordenação do Projeto, os Documentos abaixo relacionados.
            </p>
            <br>
            <ol>
                <li>Atestado Médico;</li>
                <li>Cópia do RG e CPF;</li>
                <li>Comprovante de Residência;</li>
                <li>Cópia do certificado da atual graduação.</li>
            </ol>
            <p>Os documentos acima podem ser entregues digitalmente por e-mail: akckaratedo@gmail.com</p>
        </html>
    ";
    
    return $htmlQuestionario;
}