<?php
/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: c.proto
 *
 * -*- magic methods -*-
 *
 * @method array getMessage()
 * @method void appendMessage(OuterMessage_InnerMessage $value)
 */
class OuterMessage extends ProtocolBuffersMessage
{
    // @@protoc_insertion_point(traits:.OuterMessage)

    /**
     * @var array $message
     * @tag 1
     * @label optional
     * @type ProtocolBuffers::TYPE_MESSAGE
     * @see OuterMessage_InnerMessage
     **/
    protected $messages;

    protected $message;

    // @@protoc_insertion_point(properties_scope:.OuterMessage)

    // @@protoc_insertion_point(class_scope:.OuterMessage)

    /**
     * get descriptor for protocol buffers
     *
     * @return \ProtocolBuffersDescriptor
     */
    public static function getDescriptor()
    {
        static $descriptor;

        if (!isset($descriptor)) {
            $desc = new ProtocolBuffersDescriptorBuilder();
            $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
                "type"     => ProtocolBuffers::TYPE_MESSAGE,
                "name"     => "messages",
                "required" => false,
                "optional" => false,
                "repeated" => true,
                "packable" => false,
                "default"  => null,
                "message" => 'OuterMessage_InnerMessage',
            )));
            $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
                "type"     => ProtocolBuffers::TYPE_MESSAGE,
                "name"     => "message",
                "required" => false,
                "optional" => false,
                "repeated" => false,
                "packable" => false,
                "default"  => null,
                "message" => 'OuterMessage_InnerMessage',
            )));
            // @@protoc_insertion_point(builder_scope:.OuterMessage)

            $descriptor = $desc->build();
        }
        return $descriptor;
    }

}

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: c.proto
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId(string $value)
 * @method string getName()
 * @method void setName(string $value)
 */
class OuterMessage_InnerMessage extends ProtocolBuffersMessage
{
    // @@protoc_insertion_point(traits:.OuterMessage.InnerMessage)

    /**
     * @var string $id
     * @tag 1
     * @label optional
     * @type ProtocolBuffers::TYPE_INT64
     **/
    protected $id;

    /**
     * @var string $name
     * @tag 2
     * @label optional
     * @type ProtocolBuffers::TYPE_STRING
     **/
    protected $name;


    // @@protoc_insertion_point(properties_scope:.OuterMessage.InnerMessage)

    // @@protoc_insertion_point(class_scope:.OuterMessage.InnerMessage)

    /**
     * get descriptor for protocol buffers
     *
     * @return \ProtocolBuffersDescriptor
     */
    public static function getDescriptor()
    {
        static $descriptor;

        if (!isset($descriptor)) {
            $desc = new ProtocolBuffersDescriptorBuilder();
            $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
                "type"     => ProtocolBuffers::TYPE_INT64,
                "name"     => "id",
                "required" => false,
                "optional" => true,
                "repeated" => false,
                "packable" => false,
                "default"  => null,
            )));
            $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
                "type"     => ProtocolBuffers::TYPE_STRING,
                "name"     => "name",
                "required" => false,
                "optional" => true,
                "repeated" => false,
                "packable" => false,
                "default"  => "",
            )));
            // @@protoc_insertion_point(builder_scope:.OuterMessage.InnerMessage)

            $descriptor = $desc->build();
        }
        return $descriptor;
    }

}