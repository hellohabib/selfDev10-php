<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td{
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body style="margin-left:100px;margin-top:50px;">
    <h1> এই কোড অবশ্যই কোন লোকাল-হোস্ট ফোল্ডারে রেখে ব্রাউজারে দেখতে হবে </h1>
    <br>
    <h1> অল্টারনেটিভ সিনট্যাক্স ইউজ করে HTML এর মধ্যে PHP Code এমবেড করা </h1>
    <br>
    <h3>for-loop ইউজ করে tr এবং td এর মধ্যে Data Show করা</h3>
    <table>
        <?php for($i=1;$i<=5;$i++): ?>
        <tr>
            <?php for($j=1;$j<=5;$j++): ?>
            <td><?php echo $i*$j; ?></td> 
            <?php endfor ?>
        </tr>        
        <?php endfor;?>
    </table>
    <br>
    <h3>foreach ইউজ করে li এর মধ্যে Array থেকে Data Show করা</h3>
    <?php $letters=['aa','bb','cc','dd'];  ?>
    <ul>
        <?php foreach($letters as $letter):  ?>
        <li> <?php echo $letter;  ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>