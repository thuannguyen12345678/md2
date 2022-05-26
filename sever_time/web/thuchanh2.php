<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        img{
            width:100px;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <?php
$customerList = [
    "1" => [
        "ten" => "Nguyễn Đức Thuần",
        "ngaysinh" => "1998-03-20",
        "diachi" => "Quảng trị",
        "anh" => "https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/257486524_132028282536347_7772092221618377735_n.jpg?stp=dst-jpg_s851x315&_nc_cat=104&ccb=1-7&_nc_sid=da31f3&_nc_ohc=CpmHn-BkYbsAX9t6yr-&_nc_ht=scontent.fdad3-4.fna&oh=00_AT9FDhaLc5U29pR6Pm6mMfY_OFkFGi9YgRahcQXiztAKWg&oe=6290BF3C"
    ],
    "2" => [
        "ten" => "Trần Ngọc Vinh",
        "ngaysinh" => "2000-03-70",
        "diachi" => "Quảng trị",
        "anh" => "https://scontent.fdad3-4.fna.fbcdn.net/v/t1.6435-9/86610515_595420164647873_7764114652740452352_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=AKkDlakGda0AX9GCTGm&_nc_ht=scontent.fdad3-4.fna&oh=00_AT_cjPYyjjsgfigkWWvHHC9K-fNG124NKFLr2w-VdnVjkw&oe=62B21814"
    ],
    "3" => [
        "ten" => "Trần Ngọc Linh",
        "ngaysinh" => "2003-03-20",
        "diachi" => "Quảng trị",
        "anh" => "https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/269720876_983176715604935_2757886406170865130_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=174925&_nc_ohc=cqgd3bTqRC4AX_B8kux&_nc_ht=scontent.fdad3-1.fna&oh=00_AT-3Lc8sv2W2VsreJfsptzR6yn7LhYPjTZZvEWFT_P-XLA&oe=628F5104"
    ],
    "4" => [
        "ten" => "Nguyễn Thị Hồng Thắm",
        "ngaysinh" => "2001-03-10",
        "diachi" => "Quảng trị",
        "anh" => "https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/265034683_1037162880348124_431597088885295209_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=174925&_nc_ohc=yWyhELMTPhIAX_fLpcm&_nc_ht=scontent.fdad3-1.fna&oh=00_AT8RlNWiE5sx0TB1v9xDq_VNmHCX-Eck8Vpmjq7O7UtbiA&oe=62911D2E"
    ],
    "5" => [
        "ten" => "Phan Thảo",
        "ngaysinh" => "2001-04-20",
        "diachi" => "Quảng trị",
        "anh" => "https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/264612478_2046523855486807_6345718100588143242_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=PE8gCLtoV3MAX9rvZ7b&_nc_ht=scontent.fdad3-4.fna&oh=00_AT9rn9gsv69A2CHlfzHwRrQNb8ROYHGdYiOpiSnAc32C-Q&oe=628F6F22"
    ]
    ];
    ?>
    <tbody>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>




    
</body>
</html>