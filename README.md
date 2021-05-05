# PsalmIssueTest
This is a little project to test the issue https://github.com/vimeo/psalm/issues/5714

If you exec psalm with version 4.4.1 you don't have any issue, if you exec version 4.7.2 this issue is reported:

```
Scanning files...
Analyzing files...

E

ERROR: UnusedVariable - src/test.php:5:20 - $key is never referenced or the value is not used (see https://psalm.dev/077)
foreach ($array as $key => $row) {


------------------------------
1 errors found
------------------------------
Psalm can automatically fix 1 of these issues.
Run Psalm again with 
--alter --issues=UnusedVariable --dry-run
to see what it can fix.
```

Adding findUnusedCode="false" in psalm.xml resolve the issue but the default value should be false already
