# Google Chrome Bug

In Nov of 2019, W. Jeff Crawford created this video

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/ANbns33ZAco/0.jpg)](https://www.youtube.com/watch?v=ANbns33ZAco)

I happened to come across it while researching something else, and it make me stop and try to figure out what was going on here.

This repo is a the code I used to reproduce Jeff's problem, and discover the solution.

It turns out the problem is not a bug in 'Chrome', but actually a 'bug' in PHP since the year 2000, [or at least continues to be debated as if it a bug or not](https://bugs.php.net/bug.php?id=5415). 

It has to do with how PHP changes the Expires and max-age headers by default when you use the session_start() function.

You can read the enter write up at this blog article: [Chrome View-Source Refresh – Is it a bug?](https://askgeekwisdom.wordpress.com/?p=88)

You may also want to check out Jeff's books on Amazon [My Father, Not My Father ](https://www.amazon.com/My-Father-Not/dp/1080443703)
