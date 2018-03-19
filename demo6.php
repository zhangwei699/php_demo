<?php
/**
 * 题目:有1000瓶水，其中有一瓶有毒，小白鼠只要尝一点带毒的水24小时后就会死亡，问至少要多少只小白鼠才能在24小时鉴别出哪瓶水有毒？
 */


/**
//1.首先1只老鼠代表2中可能，2只老鼠代表4中可能，所以要证明1000瓶水中到底那瓶有毒，至少需要 2^n > 1000,即n等于10只
//2.具体步骤如下:
 2.1 用二进制给1000瓶酒打上编号,并找出另外10个瓶子(从1到10编号)--按照如下规则制作10种混合液,
只要酒瓶的二进制最后1位是1放到到1号混合液中个，酒瓶的倒数第二位是2的酒放到2号混合液中，以此类推

    0000000001 (第1瓶)    --  1号混合液
    0000000010 (第2瓶)    --  2号混合液
    0000000011 (第3瓶)    --  1号,2号混合液
    0000000100 (第4瓶)    --  3号混合液
    0000000101 (第5瓶)    --  1,3号混合液
    0000000110 (第6瓶)    --  2,3号混合液
    0000000111 (第7瓶)    --  1,2,3号混合液
    0000001000 (第8瓶)    --  4号混合液
    0000001001 (第9瓶)    --  1,4号混合液
    0000001010 (第10瓶)   --- 2 4号混合液
    0000001011 (第11瓶)   --- 1,2 4 号混合液
    0000001100 (第12瓶)   --- 3,4 号混合液
    ..........(..)        ---- ........
    1111101000 (第1000瓶) --- 4号、6号、7号、8号、9号、10号混合液

2.2 找出10只小白鼠，按照1-10给小白鼠编号，并喂入对应编号的混合液
2.3 等24小时候，按照从高到底的顺序，查看小白鼠的生死状态，生标示为1，死标识为0，即可判断出哪瓶酒有毒

3.举例说明: 如果 4,6,7,8,9,10小白鼠死亡，就证明第1000瓶酒有毒，如果1,2号小白鼠死亡，就证明第3瓶酒有毒。

 */

