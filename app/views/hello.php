<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Demo Laravel jTable</title>

    <link href="//code.jquery.com/ui/1.10.4/themes/start/jquery-ui.css" rel="stylesheet">

    <!-- Include one of jTable styles. -->
    <link href="/jtable/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <div id="PersonTableContainer"></div>


    <script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>

    <!-- Include jTable script file. -->
    <script src="/jtable/jquery.jtable.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('#PersonTableContainer').jtable({
                title: 'Table of people',
                actions: {
                    listAction  : '/people_list',   // Route harus POST
                    createAction: '/people_create', // Route harus POST
                    updateAction: '/person_update', // Route harus POST
                    deleteAction: '/person_delete'  // Route harus POST

                },
                fields: {
                    id: {
                        key: true,
                        list: false
                    },
                    name: {
                        title: 'Author Name',
                        width: '40%'
                    },
                    age: {
                        title: 'Age',
                        width: '20%'
                    },
                    created_at: {
                        title: 'Record date',
                        width: '30%',
                        type: 'date',
                        create: false,
                        edit: false
                    }
                },
            });


            $('#PersonTableContainer').jtable('load');

        });
    </script>
</body>
</html>
