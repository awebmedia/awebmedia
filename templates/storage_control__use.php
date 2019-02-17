<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <?if($param['sm']!=(int)1):?>
        <script src="/scr/script/storage_control.js"></script>
        <?if($param['um']==(int)1):?>
            <script>
                window.sessionStorage.setItem('GETRequest', window.location.search);
                window.sessionStorage.setItem('GETPath', window.location.pathname);

                window.history.replaceState(null, 'sd', window.location.pathname);
            </script>
        <?endif;?>
    <?endif;?>
    <title>Document</title>
</head>
<body>
    
</body>
</html>