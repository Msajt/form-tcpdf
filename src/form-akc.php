<?php
    //! TCPDF
    require_once('../vendor/tecnickcom/tcpdf/tcpdf.php');
    //! Função para adicionar fundo na folha
    require_once('./functions/addPageBackground.php');
    //! Função para gerar uma célula
    require_once('./functions/generateCell.php');
    //! Retornar conteúdo HTML
    require_once('./functions/returnTables.php');
    require_once('./functions/returnQuestions.php');

    //? Gerando arquivo PDF
    $pdf = new TCPDF('P','mm','A4');
    //*     Removendo header    
    $pdf->SetPrintHeader(false);
    //*     Abrindo arquivo para edição
    $pdf->Open();
    
    //? Retornando arquivos HTML
    $htmlTables = returnTables();
    $htmlQuestionario = returnQuestions();

    //? Gerar as tabelas da inscrição
    //*     Primeira página
    $pdf->AddPage();
    addPageBackground($pdf, './assets/photo.jpg');
    $pdf->SetFont('times', '', 12);
    $pdf->writeHTML($htmlTables[0], true, false, true, false, "");
    $pdf->writeHTML($htmlTables[1], true, false, true, false, "");
    //*     Segunda página
    $pdf->AddPage();
    addPageBackground($pdf, './assets/photo.jpg');
    $pdf->SetFont('times', '', 12);
    $pdf->writeHTML($htmlTables[2], true, false, true, false, "");
    //*     Terceira página
    $pdf->AddPage();
    addPageBackground($pdf, './assets/photo.jpg');
    $pdf->SetFont('times', '', 12);
    $pdf->writeHTML($htmlQuestionario, true, false, true, false, "");

    //? Assinatura
    $pdf->SetFont('times','',12);
    generateCell($pdf, "Local e data: _______________________, ____/____/________", [20, 230], [170,5], 'R');
    generateCell($pdf, "___________________________________________", [20, 245], [170,5], 'C');
        generateCell($pdf, "Assinatura do aluno", [20, 250], [170,5], 'C');
    generateCell($pdf, "___________________________________________", [20, 260], [170,5], 'C');
        generateCell($pdf, "Assinatura do responsável", [20, 265], [170,5], 'C');

    //? Gerar o arquivo .pdf
    $pdf->Output('form-cadastro-akc.pdf', 'I');
