<?php
/**
 * Q2A Flags extenstion - plugin for Question2Answer
 * @author Eryk Andrzejewski <erykandrzejewski@gmail.com>
 */

class flags_extension_event
{
    public function process_event($event, $userid, $handle, $cookieid, $params)
    {

    }

    function admin_form()
    {
        return [
            'fields' => [
                [
                    'label' => 'Flaggers must type a flag reason',
                    'tags' => 'name="flaggers_must_type_flag_reason"',
                    'value' => qa_opt('flaggers_must_type_flag_reason'),
                    'type' => 'checkbox',
                ]
            ],

            'buttons' => [
                [
                    'label' => 'Save changes',
                    'tags' => 'name="flags_extension_save_button"',
                ],
            ],
        ];
    }
}