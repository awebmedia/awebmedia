<?if($param['sm']!=(int)1):?>
    <script src="/scr/script/storage_control.js"></script>
    <?if($param['um']==(int)1):?>
        <script>
            window.sessionStorage.setItem('GETRequest', window.location.search);
            window.sessionStorage.setItem('GETPath', window.location.pathname);

            window.history.replaceState(null, 'sd', window.location.pathname);
        </script>
    <?else:?>
        <script>
            window.sessionStorage.clear();
            window.history.replaceState(null, 'sd', window.location.pathname);
        </script>
    <?endif;?>
<?endif;?>