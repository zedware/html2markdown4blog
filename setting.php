<?php
return array(
    //md文件存储的路径
    'save_path' => BASE_PATH . 'posts',

    //目前仅支持csdn blog，这一项不用修改
    'blog_base_url' => 'https://blog.csdn.net',

    //目录列表页的url，一般设置成 http://blog.csdn.net/your_name 就可以了（注意不可以是博客管理中的文章管理列表）
    //如果设置了这一项，则下面的post_url设置无效
    // 'archive_url' => '',
    // 'archive_url' => 'https://blog.csdn.net/zedware',
    // 解析文章列表的“下一页”功能失效了，如果文章数比较少，修改下面这个参数为对应的页面，多跑几遍脚本算了。
    'archive_url' => 'https://blog.csdn.net/zedware/article/list/3',

    //某一篇文章的url，上面的archive_url未设置时，该设置有效
    //'post_url' => 'https://blog.csdn.net/zedware/article/details/5521392',
    'post_url' => '',

    //文件头部加入哪种YAML front-matter，可选的有：Jekyll(Octopress),Hexo
    //也可以填none或者不填表示不用插入Front-matter.
    //front-matter的具体配置见 front-matter.php 文件，可以自行调整
    'front-matter' => 'Jekyll',

    //是否在文件名前插入日期，即Y-m-d-title的形式
    'date_ahead_filename' => true,

    //是否使用github风格的code blocks的语法，即以在代码块开头和结尾加上```来替换掉在每行开头插入制表符的方式
    'github_code_block_style' => true
);
