# userpress
> A script to detect wordpress site's Username 

# Usage:

```bash
php userpress.php http://wordpress-site.com
```

or directly in your linux/mac terminal:

```bash
export SITE=http://some-wp-site.com && \
curl -sSLf $SITE`echo L3dwLWpzb24vd3AvdjIvdXNlcnMv|base64 -d` | jq '.[]|{name:.name}|join(",")'
```
