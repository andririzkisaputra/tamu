<?php

/**
 *
 */
class Cron extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  public function email_sent() {
    $config   = array(
      'protocol' => 'smtp',
      'smtp_host' => $this->all_library->setting('smtp_host'),
      'smtp_port' => $this->all_library->setting('smtp_port'),
      'smtp_user' => $this->all_library->setting('smtp_user'),
      'smtp_pass' => $this->all_library->setting('smtp_pass'),
      'mailtype'  => 'html',
      'charset'   => 'iso-8859-1'
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from($this->all_library->setting('mail_sender'), $this->all_library->setting('mail_sender_name'));
    $data_email = $this->all_model->get_all_by('email_sent', ['is_sent' => '0'], 'created_on ASC');
    // print_r($this->email);
    // exit;
    if ($data_email) {
      foreach ($data_email as $key => $value) {
        $this->email->to($value->email_to);
        $this->email->subject($value->title);
        $dataEmail  = array(
          'title'     => $value->title,
          'pre_title' => $value->pre_title,
          'msg_title' => $value->msg_title,
          'content'   => $value->content,
        );
        if ($value->button) {
          $dataEmail['button'] = $value->button;
        }
        $message = $this->load->view('email/index', $dataEmail, TRUE);
        $this->email->message($message);
        if ($value->attach) {
          $this->email->attach($value->attach);
        }

        if ($this->email->send()) {
          $this->all_model->update(['email_sent_id' => $value->email_sent_id], 'email_sent', ['is_sent' => '1']);
          $this->email->clear();
        }else {
            show_error($this->email->print_debugger());
        }
      }
    }
  }

}
?>
