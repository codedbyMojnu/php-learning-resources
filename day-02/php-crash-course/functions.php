<?php

function checkPrimeNumber($num)
{
    if ($num === 0 || $num === 1) {
        return "you input $num, which is not prime";
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return "$num is not prime";
        }
    }
    return "$num is prime";
}

echo checkPrimeNumber(1);
echo "<br>";
echo checkPrimeNumber(23);
echo "<br>";
echo checkPrimeNumber(97);
echo "<br>";
echo checkPrimeNumber(93);
echo "<br>";
echo checkPrimeNumber(39);

/*
Yeah, that code has a couple of **fucking** logic issues — let's break it down bluntly and fix it.

---

### 🔴 Problems in Your Function:

#### 1. **Syntax error:**

```php
if ($num % i === 0)
```

* `i` is undefined. You meant `$i`.

✅ **Fix:**

```php
if ($num % $i === 0)
```

---

#### 2. **Wrong Logic:**

You're **returning too early inside the loop.** This:

```php
if (...) {
    return "...";
} else {
    return "...";
}
```

... **exits** the loop after the first check. That's not how you check for primes.

---

#### 3. **Wrong message:**

If a number is divisible (i.e. `not prime`), you're returning it as **prime**, and vice versa.

---

### ✅ Correct Version of the Function:

```php
function checkPrimeNumber($num)
{
    if ($num === 0 || $num === 1) {
        return "You input $num, which is not prime.";
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return "$num is not prime.";
        }
    }

    return "$num is prime.";
}
```

---

### 🧪 Test It:

```php
echo checkPrimeNumber(7);  // 7 is prime.
echo checkPrimeNumber(8);  // 8 is not prime.
echo checkPrimeNumber(1);  // 1 is not prime.
```

*/