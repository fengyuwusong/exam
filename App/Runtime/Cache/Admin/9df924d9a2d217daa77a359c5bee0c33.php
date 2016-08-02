<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>demo</title>
</head>
<body>
    <form action="addQuestion" method="post" accept-charset="utf-8">
        <input type="text" name="question" value="" placeholder="请输入问题">
        <input type="text" name="answer_1" value="" placeholder="选项一">
        <input type="text" name="answer_2" value="" placeholder="选项二">
        <input type="text" name="answer_3" value="" placeholder="选项三">
        <input type="text" name="answer_4" value="" placeholder="选项四">
        <input type="text" name="answer" value="" placeholder="正确答案">
        <input type="submit" name="submit" value="提交">
    </form>
</body>
</html>