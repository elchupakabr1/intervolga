<?php
$a = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in enim blandit, consectetur enim vel, vehicula eros. Aliquam dapibus vestibulum neque sit amet accumsan. Aliquam id metus nunc. Aliquam nec justo ut odio iaculis luctus. Vestibulum neque dolor, hendrerit vitae dictum eget, maximus in nibh. Curabitur vestibulum porta ipsum, vel suscipit orci gravida et. Aliquam sit amet sodales erat. Proin vestibulum leo sit amet rutrum vulputate. Aliquam eget metus non sapien pulvinar viverra at ac sapien. Mauris venenatis ex in pulvinar malesuada. Cras in ultricies leo, ac sodales nisl. Aliquam erat volutpat. Suspendisse vel odio facilisis, aliquet nibh vel, volutpat arcu.

Donec hendrerit cursus eros, in facilisis mauris volutpat at. Maecenas nec condimentum orci. Sed convallis euismod facilisis. Sed id diam vitae nulla condimentum ullamcorper eu vitae lorem. Vestibulum pulvinar, nulla quis auctor rhoncus, neque augue ultricies lorem, a suscipit sem mauris vitae purus. Morbi ultricies urna a dui rhoncus, viverra congue orci eleifend. Maecenas venenatis scelerisque justo vel vehicula. Praesent vehicula tristique lectus, vitae accumsan nunc sodales vitae. Nunc mattis, orci in feugiat congue, nulla justo tempus lectus, ut sagittis lacus felis id risus. Etiam euismod nisl non ligula maximus, placerat condimentum velit elementum. Maecenas nibh tellus, gravida a ornare at, imperdiet vel mauris. Proin iaculis non lectus malesuada elementum.

Aenean sagittis lectus non magna varius, eget tempus mi laoreet. Nunc convallis, diam ac vestibulum gravida, augue nulla sodales ligula, eget sodales dui leo in lacus. Aenean ut mollis est. Quisque eu lorem ex. Nulla dignissim ipsum sit amet magna fermentum maximus sed nec risus. Integer vitae justo suscipit, pellentesque nunc sed, imperdiet erat. Nunc sit amet est ullamcorper, posuere tellus sed, condimentum elit. Maecenas sollicitudin, ipsum at placerat tincidunt, enim sem consequat felis, sed luctus nisl massa vel sem. Nam non sapien massa. Donec vestibulum auctor eleifend. Nam.';
$link = 'http://testsite.ru/index.php?news=234';

$begin = mb_substr($a, 0,180).'... ';
$pattern = '/[\S]*[\s]{1}[\S]*[.]{3}/';
preg_match($pattern, $begin, $end);
$begin = str_replace($end," ",$begin);
$short = 'нет анкора';
if(!empty($end[0])){
$short = $end[0];
}
echo $begin;
$result = '<a href="' . $link . '">' . $short . '</a>';

echo $result."\n";