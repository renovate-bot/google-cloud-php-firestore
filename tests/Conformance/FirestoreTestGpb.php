<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

class FirestoreTestGpb
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Firestore\V1Beta1\Common::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Document::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Firestore::initOnce();
        \GPBMetadata\Google\Firestore\V1Beta1\Query::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa7170a0a746573742e70726f746f120574657374731a27676f6f676c65" .
            "2f6669726573746f72652f763162657461312f646f63756d656e742e7072" .
            "6f746f1a28676f6f676c652f6669726573746f72652f763162657461312f" .
            "6669726573746f72652e70726f746f1a24676f6f676c652f666972657374" .
            "6f72652f763162657461312f71756572792e70726f746f1a1f676f6f676c" .
            "652f70726f746f6275662f74696d657374616d702e70726f746f22270a09" .
            "546573745375697465121a0a05746573747318012003280b320b2e746573" .
            "74732e5465737422c8020a045465737412130a0b6465736372697074696f" .
            "6e180120012809121d0a0367657418022001280b320e2e74657374732e47" .
            "657454657374480012230a0663726561746518032001280b32112e746573" .
            "74732e437265617465546573744800121d0a0373657418042001280b320e" .
            "2e74657374732e53657454657374480012230a0675706461746518052001" .
            "280b32112e74657374732e557064617465546573744800122e0a0c757064" .
            "6174655f706174687318062001280b32162e74657374732e557064617465" .
            "506174687354657374480012230a0664656c65746518072001280b32112e" .
            "74657374732e44656c65746554657374480012210a057175657279180820" .
            "01280b32102e74657374732e517565727954657374480012230a066c6973" .
            "74656e18092001280b32112e74657374732e4c697374656e546573744800" .
            "42060a0474657374225e0a074765745465737412140a0c646f635f726566" .
            "5f70617468180120012809123d0a077265717565737418022001280b322c" .
            "2e676f6f676c652e6669726573746f72652e763162657461312e47657444" .
            "6f63756d656e74526571756573742281010a0a4372656174655465737412" .
            "140a0c646f635f7265665f7061746818012001280912110a096a736f6e5f" .
            "6461746118022001280912380a077265717565737418032001280b32272e" .
            "676f6f676c652e6669726573746f72652e763162657461312e436f6d6d69" .
            "745265717565737412100a0869735f6572726f7218042001280822a0010a" .
            "075365745465737412140a0c646f635f7265665f70617468180120012809" .
            "12200a066f7074696f6e18022001280b32102e74657374732e5365744f70" .
            "74696f6e12110a096a736f6e5f6461746118032001280912380a07726571" .
            "7565737418042001280b32272e676f6f676c652e6669726573746f72652e" .
            "763162657461312e436f6d6d69745265717565737412100a0869735f6572" .
            "726f7218052001280822bf010a0a5570646174655465737412140a0c646f" .
            "635f7265665f70617468180120012809123c0a0c707265636f6e64697469" .
            "6f6e18022001280b32262e676f6f676c652e6669726573746f72652e7631" .
            "62657461312e507265636f6e646974696f6e12110a096a736f6e5f646174" .
            "6118032001280912380a077265717565737418042001280b32272e676f6f" .
            "676c652e6669726573746f72652e763162657461312e436f6d6d69745265" .
            "717565737412100a0869735f6572726f7218052001280822ed010a0f5570" .
            "6461746550617468735465737412140a0c646f635f7265665f7061746818" .
            "0120012809123c0a0c707265636f6e646974696f6e18022001280b32262e" .
            "676f6f676c652e6669726573746f72652e763162657461312e507265636f" .
            "6e646974696f6e12250a0b6669656c645f706174687318032003280b3210" .
            "2e74657374732e4669656c645061746812130a0b6a736f6e5f76616c7565" .
            "7318042003280912380a077265717565737418052001280b32272e676f6f" .
            "676c652e6669726573746f72652e763162657461312e436f6d6d69745265" .
            "717565737412100a0869735f6572726f7218062001280822ac010a0a4465" .
            "6c6574655465737412140a0c646f635f7265665f70617468180120012809" .
            "123c0a0c707265636f6e646974696f6e18022001280b32262e676f6f676c" .
            "652e6669726573746f72652e763162657461312e507265636f6e64697469" .
            "6f6e12380a077265717565737418032001280b32272e676f6f676c652e66" .
            "69726573746f72652e763162657461312e436f6d6d697452657175657374" .
            "12100a0869735f6572726f72180420012808223a0a095365744f7074696f" .
            "6e120b0a03616c6c18012001280812200a066669656c647318022003280b" .
            "32102e74657374732e4669656c6450617468228a010a0951756572795465" .
            "737412110a09636f6c6c5f70617468180120012809121e0a07636c617573" .
            "657318022003280b320d2e74657374732e436c6175736512380a05717565" .
            "727918032001280b32292e676f6f676c652e6669726573746f72652e7631" .
            "62657461312e53747275637475726564517565727912100a0869735f6572" .
            "726f7218042001280822a8020a06436c61757365121f0a0673656c656374" .
            "18012001280b320d2e74657374732e53656c6563744800121d0a05776865" .
            "726518022001280b320c2e74657374732e5768657265480012220a086f72" .
            "6465725f627918032001280b320e2e74657374732e4f7264657242794800" .
            "12100a066f66667365741804200128054800120f0a056c696d6974180520" .
            "012805480012210a0873746172745f617418062001280b320d2e74657374" .
            "732e437572736f72480012240a0b73746172745f61667465721807200128" .
            "0b320d2e74657374732e437572736f724800121f0a06656e645f61741808" .
            "2001280b320d2e74657374732e437572736f72480012230a0a656e645f62" .
            "65666f726518092001280b320d2e74657374732e437572736f7248004208" .
            "0a06636c61757365222a0a0653656c65637412200a066669656c64731801" .
            "2003280b32102e74657374732e4669656c645061746822470a0557686572" .
            "65121e0a047061746818012001280b32102e74657374732e4669656c6450" .
            "617468120a0a026f7018022001280912120a0a6a736f6e5f76616c756518" .
            "0320012809223c0a074f726465724279121e0a047061746818012001280b" .
            "32102e74657374732e4669656c645061746812110a09646972656374696f" .
            "6e18022001280922470a06437572736f7212280a0c646f635f736e617073" .
            "686f7418012001280b32122e74657374732e446f63536e617073686f7412" .
            "130a0b6a736f6e5f76616c756573180220032809222e0a0b446f63536e61" .
            "7073686f74120c0a047061746818012001280912110a096a736f6e5f6461" .
            "7461180220012809221a0a094669656c6450617468120d0a056669656c64" .
            "180120032809227f0a0a4c697374656e54657374123b0a09726573706f6e" .
            "73657318012003280b32282e676f6f676c652e6669726573746f72652e76" .
            "3162657461312e4c697374656e526573706f6e736512220a09736e617073" .
            "686f747318022003280b320f2e74657374732e536e617073686f7412100a" .
            "0869735f6572726f72180320012808228e010a08536e617073686f741230" .
            "0a04646f637318012003280b32222e676f6f676c652e6669726573746f72" .
            "652e763162657461312e446f63756d656e7412210a076368616e67657318" .
            "022003280b32102e74657374732e446f634368616e6765122d0a09726561" .
            "645f74696d6518032001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d7022cb010a09446f634368616e676512230a046b69" .
            "6e6418012001280e32152e74657374732e446f634368616e67652e4b696e" .
            "64122f0a03646f6318022001280b32222e676f6f676c652e666972657374" .
            "6f72652e763162657461312e446f63756d656e7412110a096f6c645f696e" .
            "64657818032001280512110a096e65775f696e6465781804200128052242" .
            "0a044b696e6412140a104b494e445f554e53504543494649454410001209" .
            "0a0541444445441001120b0a0752454d4f5645441002120c0a084d4f4449" .
            "46494544100342780a26636f6d2e676f6f676c652e636c6f75642e666972" .
            "6573746f72652e636f6e666f726d616e6365aa0222476f6f676c652e436c" .
            "6f75642e4669726573746f72652e54657374732e50726f746fca0228476f" .
            "6f676c655c436c6f75645c4669726573746f72655c54657374735c436f6e" .
            "666f726d616e6365620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
