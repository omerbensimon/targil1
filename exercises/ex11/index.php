<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>page1</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    </head>
    <body>
        <div class="wrapper">
           <?php echo "hello " . "world"; ?>
        </div>
        
        <?php 
        $colors= array("red","blue","yellow");
        echo "i love the colors " . $colors[0] . "and " . $colors[1] . ", but my sister likes the color " . $colors[2] ; ?>
        <table class="table">
        <table class="table">
            <thead>
                <tr>
                    <?php 
                        $dayes= array("sunday","monday","thersday","wensday");
                        foreach($dayes as $day){
                            echo '<th scope="col">' . $day . '</th>';
                        }
                    ?>   
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
</body>
</html>