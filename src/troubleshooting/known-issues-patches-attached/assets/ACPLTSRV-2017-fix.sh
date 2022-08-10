#!/bin/sh

show_usage() {
	echo "Please run \"$0 apply\" to lock versions, or \"$0 rollback\" to unlock them."
}

print_exit() {
	if [ "$1" = "apply" ]; then
		echo "Finished updating, you may now run composer update."
	else 
		echo "Finished updating, you may now upgrade your installation."
	fi
	exit 0
}

composer show magento/magento2-base 2.4.4 >/dev/null  2>&1

if [ $? -ne 0 ]; then
	echo 2>&1 "Do not run this script with any Commerce version except 2.4.4."
	exit 2
fi

if [ $# -lt 1 ]; then
	show_usage
	exit 1
fi


if [ ! "$1" = "rollback" ] && [ ! "$1" = "apply" ]; then
	show_usage
	exit 1
fi

echo "Updating Open Source modules..."

AFFECTED_MODULES=$(cat <<'EOF'
magento/module-adobe-ims=2.1.3
magento/module-adobe-ims-api=2.1.1
magento/module-adobe-stock-admin-ui=1.3.1
magento/module-adobe-stock-asset=1.3.1
magento/module-adobe-stock-asset-api=2.0.1
magento/module-adobe-stock-client=1.3.2
magento/module-adobe-stock-client-api=2.1.1
magento/module-adobe-stock-image=1.3.2
magento/module-adobe-stock-image-admin-ui=1.3.2
magento/module-adobe-stock-image-api=1.3.1
magento/inventory-composer-installer=1.2.0
magento/module-inventory=1.2.2
magento/module-inventory-admin-ui=1.2.2
magento/module-inventory-advanced-checkout=1.2.1
magento/module-inventory-api=1.2.2
magento/module-inventory-bundle-import-export=1.1.1
magento/module-inventory-bundle-product=1.2.1
magento/module-inventory-bundle-product-admin-ui=1.2.2
magento/module-inventory-bundle-product-indexer=1.1.1
magento/module-inventory-cache=1.2.2
magento/module-inventory-catalog=1.2.2
magento/module-inventory-catalog-admin-ui=1.2.2
magento/module-inventory-catalog-api=1.3.2
magento/module-inventory-catalog-frontend-ui=1.0.2
magento/module-inventory-catalog-search=1.2.2
magento/module-inventory-catalog-search-bundle-product=1.0.1
magento/module-inventory-catalog-search-configurable-product=1.0.1
magento/module-inventory-configurable-product=1.2.2
magento/module-inventory-configurable-product-admin-ui=1.2.2
magento/module-inventory-configurable-product-frontend-ui=1.0.2
magento/module-inventory-configurable-product-indexer=1.2.2
magento/module-inventory-configuration=1.2.2
magento/module-inventory-configuration-api=1.2.1
magento/module-inventory-distance-based-source-selection=1.2.2
magento/module-inventory-distance-based-source-selection-admin-ui=1.2.1
magento/module-inventory-distance-based-source-selection-api=1.2.1
magento/module-inventory-elasticsearch=1.2.1
magento/module-inventory-export-stock=1.2.1
magento/module-inventory-export-stock-api=1.2.1
magento/module-inventory-graph-ql=1.2.1
magento/module-inventory-grouped-product=1.2.2
magento/module-inventory-grouped-product-admin-ui=1.2.2
magento/module-inventory-grouped-product-indexer=1.2.2
magento/module-inventory-import-export=1.2.2
magento/module-inventory-in-store-pickup=1.1.1
magento/module-inventory-in-store-pickup-admin-ui=1.1.1
magento/module-inventory-in-store-pickup-api=1.1.1
magento/module-inventory-in-store-pickup-frontend=1.1.2
magento/module-inventory-in-store-pickup-graph-ql=1.1.1
magento/module-inventory-in-store-pickup-multishipping=1.1.1
magento/module-inventory-in-store-pickup-quote=1.1.1
magento/module-inventory-in-store-pickup-quote-graph-ql=1.1.1
magento/module-inventory-in-store-pickup-sales=1.1.1
magento/module-inventory-in-store-pickup-sales-admin-ui=1.1.2
magento/module-inventory-in-store-pickup-sales-api=1.1.1
magento/module-inventory-in-store-pickup-shipping=1.1.1
magento/module-inventory-in-store-pickup-shipping-admin-ui=1.1.1
magento/module-inventory-in-store-pickup-shipping-api=1.1.1
magento/module-inventory-in-store-pickup-webapi-extension=1.1.1
magento/module-inventory-indexer=2.1.2
magento/module-inventory-low-quantity-notification=1.2.1
magento/module-inventory-low-quantity-notification-admin-ui=1.2.2
magento/module-inventory-low-quantity-notification-api=1.2.1
magento/module-inventory-multi-dimensional-indexer-api=1.2.1
magento/module-inventory-product-alert=1.2.2
magento/module-inventory-quote-graph-ql=1.0.1
magento/module-inventory-requisition-list=1.2.2
magento/module-inventory-reservation-cli=1.2.2
magento/module-inventory-reservations=1.2.1
magento/module-inventory-reservations-api=1.2.1
magento/module-inventory-sales=1.2.2
magento/module-inventory-sales-admin-ui=1.2.2
magento/module-inventory-sales-api=1.2.1
magento/module-inventory-sales-frontend-ui=1.2.2
magento/module-inventory-setup-fixture-generator=1.2.1
magento/module-inventory-shipping=1.2.2
magento/module-inventory-shipping-admin-ui=1.2.2
magento/module-inventory-source-deduction-api=1.2.2
magento/module-inventory-source-selection=1.2.1
magento/module-inventory-source-selection-api=1.4.1
magento/module-inventory-swatches-frontend-ui=1.0.1
magento/module-inventory-visual-merchandiser=1.1.2
magento/module-inventory-wishlist=1.0.1
magento/module-aws-s3-page-builder=1.0.2
magento/module-catalog-page-builder-analytics=1.6.2
magento/module-cms-page-builder-analytics=1.6.2
magento/module-page-builder=2.2.2
magento/module-page-builder-admin-analytics=1.1.2
magento/module-page-builder-analytics=1.6.2
magento/module-re-captcha-admin-ui=1.1.2
magento/module-re-captcha-checkout=1.1.2
magento/module-re-captcha-checkout-sales-rule=1.1.0
magento/module-re-captcha-contact=1.1.1
magento/module-re-captcha-customer=1.1.2
magento/module-re-captcha-frontend-ui=1.1.2
magento/module-re-captcha-migration=1.1.2
magento/module-re-captcha-newsletter=1.1.2
magento/module-re-captcha-paypal=1.1.2
magento/module-re-captcha-review=1.1.2
magento/module-re-captcha-send-friend=1.1.2
magento/module-re-captcha-store-pickup=1.0.1
magento/module-re-captcha-ui=1.1.2
magento/module-re-captcha-user=1.1.2
magento/module-re-captcha-validation=1.1.1
magento/module-re-captcha-validation-api=1.1.1
magento/module-re-captcha-version-2-checkbox=2.0.2
magento/module-re-captcha-version-2-invisible=2.0.2
magento/module-re-captcha-version-3-invisible=2.0.2
magento/module-re-captcha-webapi-api=1.0.1
magento/module-re-captcha-webapi-graph-ql=1.0.1
magento/module-re-captcha-webapi-rest=1.0.1
magento/module-re-captcha-webapi-ui=1.0.1
magento/module-securitytxt=1.1.1
magento/module-two-factor-auth=1.1.3
EOF
)

apply() {
	echo "$AFFECTED_MODULES" | while IFS= read x
	do 
		error=$(composer require --no-update $x 2>&1)
		code=$?
		if [ $code -ne 0 ]; then
			echo $error 1>&2
			exit $code
		fi
	done
}

rollback() {
	tmp=$IFS
	echo "$AFFECTED_MODULES" | while IFS= read x
	do
		name=${x%=*}
		error=$(composer remove --no-update $name 2>&1)
		code=$?
		if [ $code -ne 0 ]; then 
			echo $error 1>&2
			exit $code
		fi
	done
	IFS=$tmp
}

do_patch() {
	if [ "$1" = "rollback" ]; then
		rollback
	elif [ "$1" = "apply" ]; then
		apply
	else
		show_usage
		exit 1
	fi
}

do_patch $1

composer show magento/magento2-ee-base 2.4.4 >/dev/null  2>&1

if [ $? -ne 0 ]; then
	print_exit $1
fi

echo "Updating Commerce modules..."

AFFECTED_MODULES=$(cat <<'EOF'
magento/module-banner-page-builder=2.2.2
magento/module-banner-page-builder-analytics=1.7.1
magento/module-catalog-page-builder-analytics-staging=1.7.1
magento/module-catalog-staging-page-builder=1.7.1
magento/module-cms-page-builder-analytics-staging=1.7.1
magento/module-page-builder-admin-gws-admin-ui=1.7.1
magento/module-staging-page-builder=2.2.2
EOF
)

do_patch $1

composer show magento/magento2-b2b-base 1.3.3 >/dev/null  2>&1

if [ $? -ne 0 ]; then
	print_exit $1
fi

echo "Updating B2B modules..."

AFFECTED_MODULES=$(cat <<'EOF'
magento/module-re-captcha-company=1.0.1
EOF
)

do_patch $1

print_exit $1