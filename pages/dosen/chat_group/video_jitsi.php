<html itemscope itemtype="http://schema.org/Product" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
    </head>
    
    <body>
        <script src="https://meet.jit.si/external_api.js"></script>
        <script>
            var domain = "meet.jit.si";
            var options = {
                roomName: "<?php echo $_GET['ci']; ?>",
                width: 1350,
                height: 670,
                parentNode: undefined,
                configOverwrite: {},
                interfaceConfigOverwrite: {
                    // filmStripOnly: true
                }
            }
            var api = new JitsiMeetExternalAPI(domain, options);
        </script>
    </body>
</html>