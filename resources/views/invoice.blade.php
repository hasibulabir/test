<html>
<head>
     <meta charset="utf-8">
     <title>Invoice</title>
     <link rel="stylesheet" href="style.css">
</head>
<style>
     * {
          border: 0;
          box-sizing: content-box;
          color: inherit;
          font-family: inherit;
          font-size: inherit;
          font-style: inherit;
          font-weight: inherit;
          line-height: inherit;
          list-style: none;
          margin: 0;
          padding: 0;
          text-decoration: none;
          vertical-align: top;
          font-family: DejaVu Sans, sans-serif;
     }
     /* content editable */

     *] {
          border-radius: 0.25em;
          min-width: 1em;
          outline: 0;
     }

     *] {
          cursor: pointer;
     }

     body{
          padding: 50px !important
     }

     *]:hover,
     *]:focus,
     td:hover *],
     td:focus *],
     img.hover {
          background: #DEF;
          box-shadow: 0 0 1em 0.5em #DEF;
     }

     span] {
          display: inline-block;
     }

     /* heading */

     h1 {
          font: bold 100% sans-serif;
          letter-spacing: 0.5em;
          text-align: center;
          text-transform: uppercase;
     }

     /* table */

     table {
          font-size: 75%;
          table-layout: fixed;
          width: 100%;
     }

     table {
          border-collapse: separate;
          border-spacing: 2px;
     }

     th,
     td {
          border-width: 1px;
          padding: 0.5em;
          position: relative;
          text-align: left;
     }

     th,
     td {
          border-radius: 0.25em;
          border-style: solid;
     }

     th {
          background: #EEE;
          border-color: #BBB;
     }

     td {
          border-color: #DDD;
     }

     /* header */

     header {
          margin: 0 0 3em;
     }

     header:after {
          clear: both;
          content: "";
          display: table;
     }

     header h1 {
          background: #000;
          border-radius: 0.25em;
          color: #FFF;
          margin: 0 0 1em;
          padding: 0.5em 0;
     }

     header address {
          float: left;
          font-size: 75%;
          font-style: normal;
          line-height: 1.25;
          margin: 0 1em 1em 0;
     }

     header address p {
          margin: 0 0 0.25em;
     }

     header span,
     header img {
          display: block;
          float: right;
     }

     header span {
          margin: 0 0 1em 1em;
          max-height: 25%;
          max-width: 60%;
          position: relative;
     }

     header img {
          max-height: 100%;
          max-width: 100%;
     }

     header input {
          cursor: pointer;
          -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
          height: 100%;
          left: 0;
          opacity: 0;
          position: absolute;
          top: 0;
          width: 100%;
     }

     /* article */

     article,
     article address,
     table.meta,
     table.inventory {
          margin: 0 0 3em;
     }

     article:after {
          clear: both;
          content: "";
          display: table;
     }

     article h1 {
          clip: rect(0 0 0 0);
          position: absolute;
     }

     article address {
          float: left;
          font-size: 125%;
          font-weight: bold;
     }

     /* table meta & balance */

     table.meta,
     table.balance {
          float: right;
          width: 36%;
     }

     table.meta:after,
     table.balance:after {
          clear: both;
          content: "";
          display: table;
     }

     /* table meta */

     table.meta th {
          width: 40%;
     }

     table.meta td {
          width: 60%;
     }

     /* table items */

     table.inventory {
          clear: both;
          width: 100%;
     }

     table.inventory th {
          font-weight: bold;
          text-align: center;
     }

     table.inventory td:nth-child(1) {
          width: 26%;
     }

     table.inventory td:nth-child(2) {
          width: 38%;
     }

     table.inventory td:nth-child(3) {
          text-align: right;
          width: 12%;
     }

     table.inventory td:nth-child(4) {
          text-align: right;
          width: 12%;
     }

     table.inventory td:nth-child(5) {
          text-align: right;
          width: 12%;
     }

     /* table balance */

     table.balance th,
     table.balance td {
          width: 50%;
     }

     table.balance td {
          text-align: right;
     }

     /* aside */

     aside h1 {
          border: none;
          border-width: 0 0 1px;
          margin: 0 0 1em;
     }

     aside h1 {
          border-color: #999;
     }

     /* javascript */

     .add {
          border-width: 1px;
          display: block;
          font-size: .8rem;
          padding: 0.25em 0.5em;
          float: left;
          text-align: center;
          width: 0.6em;
     }

     .add {
          background: #9AF;
          box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
          background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
          background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
          border-radius: 0.5em;
          border-color: #0076A3;
          color: #FFF;
          cursor: pointer;
          font-weight: bold;
          text-shadow: 0 -1px 2px rgba(0, 0, 0, 0.333);
     }

     .add {
          margin: -2.5em 0 0;
     }

     .add:hover {
          background: #00ADEE;
     }

     @media print {
          * {
               -webkit-print-color-adjust: exact;
          }

          html {
               background: none;
               padding: 0;
          }

          body {
               box-shadow: none;
               margin: 0;
          }

          span:empty {
               display: none;
          }

          .add {
               display: none;
          }
     }

     page[size="A4"] {  
          width: 21cm;
          height: 29.7cm; 
     }

     @media print {
          html, body {
               width: 210mm;
               height: 297mm;
          }
          .page {
               margin: 0;
               border: initial;
               border-radius: initial;
               width: initial;
               min-height: initial;
               box-shadow: initial;
               background: initial;
               page-break-after: always;
          }
     }
</style>
<body class="page">
     <page size="A4">
          <header>
               <h1>Invoice</h1>
               <address>
                    <p>{{$data['name']}}</p>
                    <p>{{$data['mobile']}}</p>
                    <p>{{$data['app_name']}}</p>
                    <p>{{$data['address']}}</p>
               </address>
          </header>
          <article>
               <h1>Recipient</h1>
               <table class="meta">
                    <tr>
                    <th><span>Invoice #</span></th>
                    <td><span>{{$data['order_id']}}</span></td>
                    </tr>
                    <tr>
                    <th><span>Date</span></th>
                    <td><span>{{now()->format('d-m-Y h:i A')}}</span></td>
                    </tr>
                    <tr>
                    <th><span>Amount Paid</span></th>
                    <td><span id="prefix">$</span><span>{{$data['transaction_amount']}}</span></td>
                    </tr>
               </table>
               <table class="inventory">
                    <thead>
                    <tr>
                         <th><span>Item</span></th>
                         <th><span>Unit</span></th>
                         <th><span>Unit Rate</span></th>
                         <th><span>Quantity</span></th>
                         <th><span>Price</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data['item'] as $item)
                         <tr>
                              <td style="text-align: center"><span>{{$item['name']}}</span></td>
                              <td style="text-align: center"><span>{{$item['total_item']}}</span></td>
                              <td style="text-align: center"><span data-prefix>$</span><span>{{$item['price']}}</span></td>
                              <td style="text-align: center"><span>{{$item['selected_item']}}</span></td>
                              <td style="text-align: center"><span data-prefix>₹</span><span>{{($item['total'])}}</span></td>
                         </tr>
                    @endforeach
                    </tbody>
               </table>
               <table class="balance">
                    <tr>
                    <th><span>Sub Total</span></th>
                    <td style="text-align: left"><span data-prefix>$</span><span>{{$data['total_amount']}}</span></td>
                    </tr>
                    <tr>
                    <th><span>Discount</span></th>
                    <td style="text-align: left"><span data-prefix>$</span><span>{{$data['offer_amount']}}</span></td>
                    </tr>
                    <tr>
                    <th><span>Tax</span></th>
                    <td style="text-align: left"><span data-prefix>$</span><span>{{$data['tax']}}</span></td>
                    </tr>
                    <tr>
                    <th><span>Total Amount</span></th>
                    <td style="text-align: left"><span data-prefix>$</span><span>{{$data['transaction_amount']}}</span></td>
                    </tr>
               </table>
          </article>
          <aside>
               <h1 style="font-size: 28px">Thank You</h1>
          </aside>
     </page>
</body>
</html>