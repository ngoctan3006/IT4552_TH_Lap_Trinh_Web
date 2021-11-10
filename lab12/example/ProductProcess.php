<html>
    <head>
        <title>Product Information Results</title>
    </head>
    <body>
        <?php 
            $description = $_POST['description'];
            $code = $_POST['code'];
            $products = array(  'AB01' => '25-Pound Sledgehammer',
                                'AB02' => 'Extra Strong Nails', 
                                'AB03' => 'Super Adjusttable Wrench',
                                'AB04' => '3-Speed Electric Screwdriver');
            
            if (mb_eregi('boat|plane', $description)) {
                print 'Sorry, we do not sell boats or planes anymore';
            } elseif (mb_eregi('^AB', $code)) {
                if (isset($products["$code"])) {
                    print "Code $code Description : $products[$code]";
                } else {
                    print 'Sorry, product code not found';
                }
            } else {
                print 'Sorry, all our product codes start with "AB" ';
            }
        ?>
    </body>
</html>