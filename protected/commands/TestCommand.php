<?php

/**
 * Functions generating JobQueue emails for user whit abandon baskets:
 *      
 * ./yiic Test
 */
class TestCommand extends CConsoleCommand {

    public function actionIndex() {
        print "FAILED\n";

        // the message
        $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg, 70);

// send email
        mail("ubuvolt@gmail.com", "My subject", $msg);
        mail("voltani@wp.pl", "My subject", $msg);

        print "FAILED\n";
    }

}
