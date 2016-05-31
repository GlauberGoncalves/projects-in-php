<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css\style.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="section style">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" action="index.php" method="post">
                            <br>
                            <div class="form-group">
                                <label class="control-label">URL</label>
                                <input class="form-control" placeholder="Entre com o site" type="text" name="site" id="exampleInputEmail1">
                            </div>
                            <button type="submit" class="btn btn-default">IR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section style">
            <div class="container">
                <iframe height="700" width="100%" src="<?php echo "http://", $_POST["site"];?>"></iframe>
            </div>
        </div><footer class="section section-primary"> <div class="container"> <div class="row"> <div class="col-sm-6"> <h1 contenteditable="true">Glauber Gonçalves</h1> </div></div></div></footer>
    

</body></html>