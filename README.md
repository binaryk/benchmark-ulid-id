<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

In this project I measured the performance of the foreign keys when using `ulid` vs `int classic id` in a Laravel project.

For various seeds, the `ulid` version take almost twice as long as the `int` version.

![image](/public/Benchmark.png)
