<?php
function returnTables(){
    $htmlTables = [
        '
        <style type="text/css">
            .fs14  {font-size:14px}
            .fs12  {font-size:12px}
        </style>
        <table class="tg" cellspacing="0" cellpadding="1" border="1">    
            <tbody>
                <tr>
                    <th class="tg-tads" colspan="12" align="center" style="background-color:#aaaaaa"><span style="font-weight:bold; font-size:14px">FICHA DE INSCRIÇÃO </span></th>
                </tr>
                <tr>
                    <td class="fs12" colspan="10"> Nome:</td>
                    <td class="fs12" align="center" colspan="2"> M(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) F(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr class="fs12">
                    <td colspan="4"> Data de Nascimento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/</td>
                    <td colspan="2"> Idade:</td>
                    <td colspan="3"> RG:</td>
                    <td colspan="3"> CPF:</td>
                </tr>
                <tr class="fs12">
                    <td rowspan="2" colspan="2" align="center" style="background-color:#aaaaaa;font-weight:bold">Filiação:</td>
                    <td colspan="10"> Pai:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="10"> Mãe:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="12"> Profissão/Ocupação:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="12"> Se menor, nome do responsável:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="10"> Endereço:</td>
                    <td colspan="2"> N°</td>
                </tr>
                <tr class="fs12">
                    <td colspan="12"> Complemento:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="3"> CEP:</td>
                    <td colspan="7"> Bairro:</td>
                    <td colspan="2"> Estado/UF:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="5"> Celular: (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) 9</td>
                    <td colspan="9"> Email:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="3" align="center" style="background-color:#aaaaaa;font-weight:bold">Vínculo na AKC</td>
                    <td colspan="9" align="center">Sócio (&nbsp;&nbsp;&nbsp;&nbsp;) Não Sócio (&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr class="fs12">
                    <td colspan="3" align="center" style="background-color:#aaaaaa;font-weight:bold">Projeto/Dojô</td>
                    <td colspan="9"></td>
                </tr>
                <tr class="fs12">
                    <td colspan="3"> Já praticou karatê?</td>
                    <td colspan="5"> Parou em que ano?</td>
                    <td colspan="5"> Último sensei:</td>
                </tr>
                <tr class="fs12">
                    <td colspan="6"> Graduação:</td>
                    <td colspan="6"> N° CKTB:</td>
                </tr>
                <tr class="fs14" align="center">
                    <td colspan="12" style="background-color:#aaaaaa"><span style="font-weight:bold">IMC - ÍNDICE DE MASSA CORPÓREA</span></td>
                </tr>
                <tr class="fs12">
                    <td colspan="3"> Peso:</td>
                    <td colspan="3"> Altura:</td>
                    <td colspan="3"> Índice:</td>
                    <td colspan="3"> Situação:</td>
                </tr>
                <tr class="fs14" align="center">
                    <td colspan="12" style="background-color:#aaaaaa"><span style="font-weight:bold">SINAIS VITAIS</span></td>
                </tr>
                <tr class="fs12">
                    <td colspan="3"> P.A.:</td>
                    <td colspan="3"> F.C.:</td>
                    <td colspan="3"> F.R.:</td>
                    <td colspan="3"> Saturação:</td>
                </tr>
                <tr class="fs14" align="center">
                    <td colspan="12" style="background-color:#aaaaaa"><span style="font-weight:bold">ANAMINESE</span></td>
                </tr>
                <tr class="fs12">
                    <td colspan="2" rowspan="2" align="center" style="background-color:#aaaaaa;font-weight:bold">É tabagista? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td colspan="10"> Se sim, quantos cigarros ao dia?</td>
                </tr>
                <tr class="fs12">
                    <td class="tg-cly1" colspan="10"> A quanto tempo fuma?</td>
                </tr>
                <tr class="fs12">
                    <td colspan="2" rowspan="3" align="center" style="background-color:#aaaaaa;font-weight:bold">É ex-fumante? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td colspan="10"> A quanto tempo parou?</td>
                </tr>
                <tr class="fs12">
                    <td colspan="10"> Quanto tempo fumou?</td>
                </tr>
                <tr class="fs12">
                    <td colspan="10"> Quantos por dia?</td>
                </tr>
                <tr class="fs12">
                    <td colspan="4" rowspan="2" align="center" style="background-color:#aaaaaa;font-weight:bold"><span>Faz uso de álcool? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</span></td>
                    <td colspan="3" rowspan="3"> Que tipo?</td>
                    <td colspan="2" rowspan="2"> Frequência:</td>
                    <td colspan="3" rowspan="2"> Quanto por vez?</td>
                </tr>
                <tr class="fs12">
                    <td colspan="0"></td>
                </tr>
            </tbody>
        </table>
        ',
        ' 
        <style type="text/css">
            .fs14  {font-size:14px}
            .fs12  {font-size:12px}
        </style>
        <table class="tg" cellspacing="0" cellpadding="1" border="1">
            <tbody>
                <tr>
                    <td class="fs12" align="center" colspan="7" style="background-color:#aaaaaa;"><span><b>Histórico pessoal:</b> (informe doenças cardiovasculares, pulmonares, ortopédicas e musculares, além de cirurgias com tempo inferiores a 9 meses e condições como diabetes e hipertensão).</span></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7" align="center" style="background-color:#aaaaaa"><span><b>Histórico Familiar:</b> (informe, além da doença, o parentesco restringindo-se a pai, mãe, irmãos e avós).</span></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="7"></td>
                </tr>
            </tbody>
        </table>
        ', 
        '
        <style type="text/css">
            .fs14  {font-size:14px}
            .fs12  {font-size:12px}
        </style>
        <table class="tg" cellspacing="0" cellpadding="1" border="1">
            <tbody>
                <tr>
                    <th class="fs12" colspan="12"> Faz uso contínuo de medicamento(s)? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</th>
                </tr>
                <tr>
                    <td class="fs12" colspan="12" style="background-color:#aaaaaa;font-weight:bold"> Se sim. Qual(is)? Quantidade? Quantas vezes ao dia? Turno?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"></td>
                </tr>
                <tr>
                    <td class="fs12" colspan="5" align="center" style="background-color:#aaaaaa;font-weight:bold">Fez algum procedimento cirúrgico nos últimos 6 meses?</td>
                    <td class="fs12" colspan="7"> Se sim. Qual?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="5" align="center" style="background-color:#aaaaaa;font-weight:bold">Tem alergia a algum medicamento?&nbsp;&nbsp;&nbsp; S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td class="fs12" colspan="7"> Se sim. Qual?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="5" align="center" style="background-color:#aaaaaa;font-weight:bold">Tem algum outro(s) tipo(s) de alergia(s)? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td class="fs12" colspan="7"> Se sim. Qual?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="5" align="center" style="background-color:#aaaaaa;font-weight:bold">Tem sentido dores no corpo ultimamente? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td class="fs12" colspan="7"> Onde?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="2" rowspan="3" align="center" style="background-color:#aaaaaa;font-weight:bold">Já teve ou costuma ter?</td>
                    <td class="fs12" colspan="3" align="center">Convulsões? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td class="fs12" colspan="7"> Se sim. Quantas vezes?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="3" align="center">Desmaios? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td class="fs12" colspan="7"> Se sim. Quantas vezes?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="3" align="center">Enjoos? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                    <td class="fs12" colspan="7"> Se sim. Quantas vezes?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Sente dores de cabeça com frequência? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Está em dieta para perder ou ganhar peso? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Em média, quantas horas de sono por dia? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Tipo sanguíneo:</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Pratica alguma atividade física atualmente? S(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) N(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Qual(is)?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="12"> Há quanto tempo?</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="3" rowspan="6" align="center" style="background-color:#aaaaaa;font-weight:bold">Qual o seu objetivo?</td>
                    <td class="fs12" colspan="9"> Condicionamento físico (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="9"> Convívio social (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="9"> Saúde (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="9"> Lazer (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="9"> Preparação física para esporte (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
                <tr>
                    <td class="fs12" colspan="9"> Competição (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
                </tr>
            </tbody>
        </table>
        '];

    return $htmlTables;
}