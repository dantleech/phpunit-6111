GH-6111: PHPUnit SoruceMap::map() performance issue
===================================================

This repo demonstrates a performance issue relating to `<source/>` and
deprecations being triggered.

- the `src` directory countains 120k **files**.
- `phpunit.xml.dist` maps the `src` directory with `<include>`
- `phpunit.xml.dist` excludes several _suffixes_ for the same directory.

### Benchmarks

### No source mapping

```xml
    <source>
    </source>
```

**0.03s**

### Just the include

```xml
    <source>
        <include>
            <directory suffix=".php">src/</directory>
        </include>
    </source>
```

**0.71s**

### With an exclude

```xml
    <source>
        <include>
            <directory suffix=".php">src/</directory>
        </include>
        <exclude>
            <directory suffix="Controller.php">src/</directory>
        </exclude>
    </source>
```

**1.25s**

### With four excludes

```xml
    <source>
        <include>
            <directory suffix=".php">src/</directory>
        </include>
        <exclude>
            <directory suffix="Controller.php">src/</directory>
            <directory suffix="Factory.php">src/</directory>
            <directory suffix="Bus.php">src/</directory>
            <directory suffix="Car.php">src/</directory>
        </exclude>
    </source>
```

**3.5s**
