$html = '<!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Invoice</title>
            <link href="invoice.css" rel="stylesheet" media="all" />

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