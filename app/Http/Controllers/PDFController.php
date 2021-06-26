<?php


namespace App\Http\Controllers;



use Mpdf\Mpdf;

class PDFController extends Controller
{
    


    public function generatePDF()

    {

        $mpdf = new \Mpdf\Mpdf();
        
       $html = '<!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Invoice</title>
            
            <style>
            *{
              padding: 0;
              margin: 0;
              border: 0;
              outline: none;
            }
            html, body {
              width: 100%;
              height: 100%
            }
            table {
              border-collapse: collapse;
              border-spacing: 0;
              width: 100%;
              border: 0;
            }
            p {
              padding-bottom: 20px;
            }
            h1 {
              font-size: 60px;
              font-weight: normal;
              color: #fff; 
            }
            .mainContainer {
              width: 100%;
              max-width: 960px;
              margin: 0 auto;
              font-family: arial, "sans-serif";
              font-size: 15px;
              color: #000;
              line-height: 24px;
              text-align: left;
            }
            .innerContainer {
              border: 1px solid #cfd3d6;
            }
            .text-white { color: #fff; 
            }
            .head {
              background: #0d83dd;
              color: #fff;
              padding: 40px 35px;
              -webkit-print-color-adjust: exact;
            }
            .midd {
              padding: 40px 35px;
            }
            .liteHeading {
              color: #a2a2a2;
              display: block;
              padding-bottom: 3px;
            }
            .invoiceTotal {
              color: #0d83dd;
              font-size: 40px;
              font-weight: normal;
            }
            .borderTable {
              border-top: 3px solid #0d83dd;
              margin: 25px 0 40px;
            }
            .borderTable td, .borderTable th {
              padding: 10px;
              text-align: right;
            }
            .borderTable th {
             
              color: #0d83dd;
              padding-top: 15px;
             
            }
            .borderTable td {
              border-bottom: 1px solid #ccc;
            }
            .borderTable tr td:first-child, .borderTable tr th:first-child {
              text-align: left;
              
            }
            .borderTable .liteHeading {
              padding-bottom: 0;
            }
           
            .footTable td {
              padding: 10px;
              text-align: right;
              line-height: 26px;
            }
            .footTable tr td:first-child {
              text-align: left;
            }
            .blueColor {
              color: #0d83dd;
            }
            @page {
              margin: 0;
            }
            </style>

            </head>
            <body>
                <div class="mainContainer">
                  <div class="innerContainer">
                    <div class="head">
                      <table>
                        <tbody>
                          <tr>
                            <td width="50%"  class="color"><h1>INVOICE</h1></td>
                            <td align="right" class="text-white" >1 your Address<br>
                              City,State,Country<br>
                              ZIP CODE</td>
                            <td align="right" class="text-white" >647-444-1234<br>
                              Your@email.com<br>
                              Yourwebsite.com</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="midd">
                      <table>
                        <tbody>
                          <tr>
                            <td><p>
                                <span class="liteHeading">Billed To</span><br>
                                 Client Name<br>
                                Client Address<br>
                                ity,State,Country<br>
                                ZIP CODE </p></td>
                            <td><p>
                                <span class="liteHeading">Invoice Number</span> <br>000000 </p>
                              <p>
                                <span class="liteHeading">Date of issue</span> <br>08/06/2021 </p></td>
                            <td align="right"><p>
                                <span class="liteHeading">Invoice Total</span>
                              
                              <div class="invoiceTotal">$4520.00</div>
                              </p></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="borderTable">
                        <tbody>
                          <tr>
                            <th width="46%">Description </th>
                            <th width="18%">Cost</th>
                            <th width="18%">Quantity</th>
                            <th width="18%">Amount</th>
                          </tr>
                          <tr>
                            <td>Your item Name<br> <span class="liteHeading">Item description goes here</span></td>
                            <td>$1000</td>
                            <td>1</td>
                            <td>1000</td>
                          </tr>
                          <tr>
                            <td>Your item Name <br> <span class="liteHeading">Item description goes here</span></td>
                            <td>$1000</td>
                            <td>1</td>
                            <td>1000</td>
                          </tr>
                          <tr>
                            <td>Your item Name <br> <span class="liteHeading">Item description goes here</span></td>
                            <td>$1000</td>
                            <td>1</td>
                            <td>1000</td>
                          </tr>
                          <tr>
                            <td>Your item Name <br><span class="liteHeading">Item description goes here</span></td>
                            <td>$1000</td>
                            <td>1</td>
                            <td>1000</td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="footTable">
                        <tbody>
                          <tr>
                            <td>&nbsp;</td>
                            <td class="blueColor"> Sub Total<br>
                              Tax<br>
                              Total </td>
                            <td> $3000.00<br>
                              $520.00<br>
                              $4520.00 </td>
                          </tr>
                          <tr>
                            <td><span class="liteHeading">Invoice Terms</span><br> Ex.Please pay your invoice by.... </td>
                            <td class="blueColor"> Amount Due(USD) </td>
                            <td> $4520.00 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </body>
        </html>';

       $mpdf->WriteHTML($html);

          
           $mpdf->Output();

        // $pdf = PDF::loadView('myPDF');

        // return $pdf->download('demo.pdf');
    }
}
