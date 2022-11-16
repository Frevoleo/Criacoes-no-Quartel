<?php
//print_r($_POST['cutter']);die;
if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $sname = isset($_POST['sname']) ? $_POST['sname'] : '';
    $tcc = isset($_POST['tcc']) ? $_POST['tcc'] : '';
    $mestrado = isset($_POST['mestrado']) ? $_POST['mestrado'] : '';
    $cutter = isset($_POST['cutter']) ? $_POST['cutter'] : '';
    $ano = isset($_POST['ano']) ? $_POST['ano'] : '';
    $nfolha = isset($_POST['nfolha']) ? $_POST['nfolha'] : '';
    $ttrabalho = isset($_POST['ttrabalho']) ? $_POST['ttrabalho'] : '';
    $strabalho = isset($_POST['strabalho']) ? $_POST['strabalho'] : '';
    $orientador = isset($_POST['orientador']) ? $_POST['orientador'] : '';
    $torientador = isset($_POST['torientador']) ? $_POST['torientador'] : '';
    $coorientador = isset($_POST['coorientador']) ? $_POST['coorientador'] : '';
    $tcoorientador = isset($_POST['tcoorientador']) ? $_POST['tcoorientador'] : '';
    $ilustracao = isset($_POST['ilustracao']) ? $_POST['ilustracao'] : '';
    $keyd1 = isset($_POST['keyd1']) ? $_POST['keyd1'] : '';
    $keyd2 = isset($_POST['keyd2']) ? $_POST['keyd2'] : '';
    $keyd3 = isset($_POST['keyd3']) ? $_POST['keyd3'] : '';
    $keyd4 = isset($_POST['keyd4']) ? $_POST['keyd4'] : '';
    $keyd5 = isset($_POST['keyd5']) ? $_POST['keyd5'] : '';
    
	/*
	Lógica dessa programação
	é contabilizado a quantidade de valores pelo keydot.
	e é utilizado um switch case para cada caso da quantidade de valores
	a 1 , por ser obrigatoria , não precisou ser adicionada.
	logo após isso , vem uma autenticação pra ver se a variavel existe , e caso exista , preencher uma 
	outra variavel que sera utilizada pra exibição.
	
	*/
	
	if (isset($keyd1) && $keyd1 != '') {
        $keydot = 1 ;
    }

    if (isset($keyd2) && $keyd2 != '') {
        $keydot++;
    }

    if (isset($keyd3) && $keyd3 != '') {
        $keydot++;
    }

    if (isset($keyd4) && $keyd4 != '') {
        $keydot++;
    }

    if (isset($keyd5) && $keyd5 != '') {
        $keydot++;
    }
	$keyone = '1.'. $keyd1;
	$keytwo = null;
	$keythree = null;
	$keyfour = null;
	$keyfive = null;
	switch($keydot){
	case 1:
		break;
	case 2:
		$keytwo = '2.' . $keyd2 . $keyd3 . $keyd4 . $keyd5;
		break;
	case 3:
		if($keyd2 != ''):
		$keytwo = '2.' . $keyd2 ;
		
		elseif($keyd3 != '' ):
			$keytwo = '2.' . $keyd3 ;
			$keyd3 = '';
		
		elseif($keyd4 != '' ):
			$keytwo = '2.' . $keyd4 ;
			$keyd4 = '';
		
		endif;
			
			if($keyd3 != '' ):
				$keythree = '3.' . $keyd3 ;
				$keyd3 = '';
			
			elseif($keyd4 != '' ):
				$keythree = '3.' . $keyd4 ;
				$keyd4 = '';
			elseif($keyd5 != '' ):
				$keythree = '3.' . $keyd5 ;
				$keyd5 = '';
		endif;
		break;
	case 4:
			if($keyd2 != ''):
				$keytwo = '2.' . $keyd2 ;
				$keyd2 = '';
				
				elseif($keyd3 != '' ):
					$keytwo = '2.' . $keyd3 ;
					$keyd3 = '';
				
				elseif($keyd4 != '' ):
					$keytwo = '2.' . $keyd4 ;
					$keyd4 = '';
				
				endif;
					
					if($keyd3 != '' ):
						$keythree = '3.' . $keyd3 ;
						$keyd3 = '';
					
					elseif($keyd4 != '' ):
						$keythree = '3.' . $keyd4 ;
						$keyd4 = '';
					elseif($keyd5 != '' ):
						$keythree = '3.' . $keyd5 ;
						$keyd5 = '';
				endif;

					if($keyd4 != '' ):
					$keyfour = '4.' . $keyd4 ;
					$keyd4 = '';
				elseif($keyd5 != '' ):
					$keyfour = '4.' . $keyd5 ;
					$keyd5 = '';
				endif;
				break;
		case 5:
			$keytwo ='2.' . $keyd2;
			$keythree ='3.'. $keyd3;
			$keyfour ='4.'. $keyd4;
			$keyfive = '5.'. $keyd5;
			break;
	}
    if (!isset($error)) {
        if (isset($strabalho) && $strabalho != '') {
            $strab = ': '.$strabalho;
        } else {
            $strab = '';
        }

        $body = '<p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></p>'
                .'<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal;font-family:Arial;font-size:13px;">Dados Internacionais de Catalogação na Fonte.</p><br/>'
        .'<table style="border: 1px solid; border-color: #000; border-collapse:collapse;font-family:arial;margin-left:auto;margin-right:auto;width:480px;">
	<tbody style="border-color: rgb(0, 0, 0);">
		<tr>
			<td style="width:34,2000pt;border-color: #000;border-left: 1px solid ;border-right: 0px solid; border-bottom: 0px solid windowtext;">
			<p style="text-align:center;"><span id="cutter" style="text-transform: uppercase;font-family:Arial;color:rgb(0,0,0);font-size:12px;">   ' . $cutter . '</span></p>
			</td>
			<td colspan="3" style="vertical-align: bottom; width: 86.3559%;">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p style=""><span style="font-family:Arial;font-size:12px;">' . $sname . ', ' . $name . '</span><span style="font-family:Arial;font-size:12px;">.</span></p>
			</td>
		</tr>
		<tr>
			<td rowspan="8" style="border-top: medium none;vertical-align: top;">
			<p><span style="font-family:Arial;font-size:12px;">&nbsp;</span></p>
			</td>
			<td style="border-top: medium none; vertical-align: bottom; width: 0.9324%;">
			<p style=""><span style="font-family:Arial;font-size:12px;">&nbsp;</span></p>
			</td>
			<td colspan="2" style="border-top: medium none; vertical-align: bottom; width: 85.4235%;">
			<p style=""><span style="font-family:Arial;font-size:12px;">         ' . $ttrabalho . '' . $strab . ' / ' . $name . ' ' . $sname . ' - ' . $ano . '.</span></p>
			</td>
		</tr>
		<tr>
			<td style="border-top: medium none; vertical-align: bottom; width: 0.9324%;">
			<p style=""><span style="font-family:Arial;font-size:12px;">&nbsp;</span></p>
			</td>
			<td colspan="2" style="border-top: medium none; vertical-align: bottom; width: 85.4235%;">
			<p style=""><span style="font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $nfolha . ' f' . $ilustracao . '</span></p>
			</td>
		</tr>
		<tr>
			<td style="border-top: medium none; vertical-align: bottom; width: 10%;">
			<p>&nbsp;</p>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" style="border-spacing: 0;
            border-collapse: collapse;">
			<p style="font-family:Arial;font-size:12px;">           Orienta&ccedil;&atilde;o: ' . $torientador . '</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2" style="border-top: medium none; vertical-align: bottom; width: 85.4235%;">
			<p style=""><span style="font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $tcc . ' &ndash; Escola de Aperfei&ccedil;oamento de Oficiais, Rio de Janeiro, ' . $ano . '.</span></p>
			</td>
		</tr>
		<tr>
			<td style="border-top: medium none; vertical-align: bottom; width: 0.9324%;">
			<p style="">&nbsp;</p>
			</td>
			<td colspan="2" style="border-top: medium none; vertical-align: bottom; width: 85.4235%;">
			<p style="">&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td style="border-top: medium none; vertical-align: bottom; width: 0.9324%;">&nbsp;</td>
			<td colspan="2" style="border-top: medium none; vertical-align: bottom; width: 85.4235%;">
			<p style=""><span style="font-family:Arial;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $keyone . ' ' . $keytwo . ' ' . $keythree . ' ' . $keyfour . ' ' . $keyfive . 'I Escola de Aperfei&ccedil;oamento de Oficiais. II T&iacute;tulo.</span></p>
			</td>
				</tr>
		<tr>
			<td style="border-top: medium none;vertical-align: top;">
			<p><span style="font-family:Arial;font-size:12px;">&nbsp;</span></p>
			</td>
			<td style="border-top: medium none; width: 0.9324%;">
			<p style="text-align:center;"><span style="font-family:Arial;font-size:12px;">&nbsp;</span></p>
			</td>
			<td style="width:224,1000pt;border-left: 0px solid ;border-right: 0px solid;border-top:none;border-bottom:1,0000pt solid windowtext;">
			<p style="text-align:center;"><span style="font-family:Arial;font-size:12px;">&nbsp;</span></p>
			</td>
			<td colspan="2" style="border-top: medium none; width: 100%;"></p> <p>
			<p style="text-align:center;"><span style="font-family:Arial;font-size:12px;">CDD: 355</span></p> <p></p>
			</td>
		</tr>
	</tbody>
</table>
    <p><span style="font-family:Calibri;">&nbsp;</span></p>'
      .'<br /><p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal;font-family:Arial;font-size:13px;">Ficha catalográfica elaborada automaticamente de acordo com os dados fornecidos pelo(a) autor(a). Permitida a reprodução parcial ou total, desde que citada a fonte.</p><br/>';

        require_once __DIR__ . '/vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();

        $mpdf->WriteHTML($body);

        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0;


        $mpdf->SetWatermarkText('');
        $mpdf->showWatermarkText = true;
        $mpdf->watermarkTextAlpha = 0.1;

        $mpdf->Output();
    }
}
//front-end by Bruno Alves
//Back-end by Flávio Leonel Marynowski