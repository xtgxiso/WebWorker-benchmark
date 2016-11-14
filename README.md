
测试对比
========
测试主机是4核8G阿里云主机,redis也安装在该主机上,ab测试也在同一主机上，默认配置，没做系统优化.go版本是1.7.1,node是4.4.7,php是7.0.11,只所以没做fpm或mod_php的对比是因为他们太差了，也就二百左右qps而已.

go的压力测试
--------
![image](https://github.com/xtgxiso/WebWorker/blob/master/benchmark/go/go.ab.png)

node的压力测试
--------
![image](https://github.com/xtgxiso/WebWorker/blob/master/benchmark/node/node.ab.png)

php的压力测试
--------
![image](https://github.com/xtgxiso/WebWorker/blob/master/benchmark/php/php.ab.png)
