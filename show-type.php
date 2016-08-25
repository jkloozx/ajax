<?php
/**
 * Created by PhpStorm.
 * User: lhw
 * Date: 16-8-25
 * Time: 上午11:48
 */
$sql = "select * from $table where wupin = '$type' order by id desc limit 4";
$result = mysqli_query($con,$sql);
/** @var TYPE_NAME $result */
while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="col_1_of_4 span_1_of_4">
        <div class="view effect">
            <a href="<?php echo $thisPage;?>?id=<?php echo $row["id"] ?>">	<img src="<?php echo $row["imageUrl"]; ?>" class="img-responsive myImage" alt=""></a>
        </div>
        <div class="cart">
            <p class="title"> <a href="<?php echo $thisPage;?>?id=<?php echo $row["id"] ?>"><?php echo mb_substr($row["title"],0,14,"utf-8");?></a></p>
            <div class="price">
                <span class="actual"><?php echo $row["create_time"]; ?></span>
            </div>
            <a href="<?php echo $thisPage;?>?id=<?php echo $row["id"] ?>">
                <input type="submit" value="点击查看详情" class="button">
            </a>
        </div>
    </div>
    <?php
}
?>
