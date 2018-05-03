# com.ixiam.modules.kint

Adds Kint library for CiviCRM debugging
![Screenshot](images/screenshot1.png)

More info about Kint library [here](https://kint-php.github.io/kint/)

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.6+
* CiviCRM 4.X / 5.X

## Usage

Once the libray is installed, printout functions are available for debugging your CiviCRM extensions
- **d($var)**: prints out $var in rich mode
- **s($var)**: prints out $var in plain mode
- **dd($var)**: calls **d()** and **die()**
- **sd($var)**: calls **s()** and **die()**
- **dr($var)**: calls **d()** and returns $var
- **sr($var)**: calls **s()** and returns $var


### Modifiers

Modifiers are a way to change Kint output without having to use a different function. Simply prefix your call to kint with a modifier to apply it:

- **!**   Expand all data in this dump automatically
- **+**   Disable the depth limit in this dump
- **-**   Attempt to clear any buffered output before this dump
- **@**   Return the output of this dump instead of echoing it
- **~**   Use the text renderer for this dump

Example:

```
+Kint::dump($data); // Disabled depth limit
!d($data); // Expanded automatically
```



More examples [here](https://kint-php.github.io/kint/#use)
