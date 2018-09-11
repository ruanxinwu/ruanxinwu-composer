<?php
namespace yii\dadaadjckanj;
use Pheanstalk\Pheanstalk;

require './vendor/autoload.php';
function pd(){
    echo '<pre>'.PHP_EOL;
    for($i=0;$i<func_num_args();$i++){
        echo '---------------'.($i+1).'---------------'.PHP_EOL;
        print_r(func_get_arg($i));
        echo PHP_EOL;
    }
    echo '</pre>';
    die;
}
//BEANSTALKD_HOST=123.207.164.102
//BEANSTALKD_PORT=11300
$pheanstalk = new Pheanstalk('123.207.164.102');
//$pheanstalk->useTube('abc')->put(654321);die;
$job = $pheanstalk->watch('abc')->ignore('default')->reserve();
echo 23;
echo $job->getData(),$job->getId();//die;
$pheanstalk->delete($job);

