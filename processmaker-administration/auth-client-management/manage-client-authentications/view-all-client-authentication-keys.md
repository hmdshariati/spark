---
description: View all client authentication keys in your organization.
---

# View All Client Authentication Keys

## View All Client Authentication Keys <a id="view-all-scripts"></a>

ProcessMaker displays all client authentication keys to access the [ProcessMaker 4 REST API](https://develop-demo.bpm4.qa.processmaker.net/api/documentation) in one table that ProcessMaker Administrators throughout your organization have created. This makes it easy to manage client authentication keys. Client authentication keys display the most recently created keys at the top of the table.

{% hint style="info" %}
Your user account or group membership must have the "Auth Client: View Auth Client" permission to view the list of authentication keys.

Ask your ProcessMaker Administrator for assistance if necessary.
{% endhint %}

Follow these steps to view all client authentication keys granted access to the ProcessMaker 4 REST API:

1. [Log in](../../../using-processmaker/log-in.md#log-in) to ProcessMaker.
2. Click the **Admin** option from the top menu. The **Users** page displays.
3. Click the **Auth Clients** icon![](../../../.gitbook/assets/auth-client-icon-admin.png). The **Auth Clients** page displays all client authentication keys. 

![&quot;Auth Clients&quot; page displays all client authentication keys that can access the ProcessMaker 4 REST API](../../../.gitbook/assets/auth-client-page-admin.png)

The **Auth Clients** page displays the following information about client authentication keys that can access the ProcessMaker 4 REST API:

* **Client ID:** The **Client ID** column displays the Client ID for the key. ProcessMaker 4 automatically generates the Client ID value when the key is created and represents a sequential number of how many keys have been created at that time.
* **Name:** The **Name** column displays the name of the key. See [Create a New Client Authentication Key](../create-a-new-client-authentication-key.md).
* **Redirect:** The **Redirect** column displays the redirect URL when they key is used. See [Create a New Client Authentication Key](../create-a-new-client-authentication-key.md).
* **Client Secret:** The **Client Secret** column displays the Client Secret for the key. ProcessMaker 4 automatically generates the Client Secret value when the key is created. Click the **Copy Client Secret to Clipboard** icon![](../../../.gitbook/assets/copy-icon-admin.png)to copy the Client Secret. Paste the Client Secret into your application to access the ProcessMaker 4 REST API.

{% hint style="info" %}
### No Client Authentication Keys?

If no Client authentication keys have been created, the following message displays: **No Data Available**.

### Edit a Client Authentication Key

Click the **Edit** icon![](../../../.gitbook/assets/edit-icon.png). See [Edit a Client Authentication Key](edit-a-client-authentication-key.md).

### Display Information the Way You Want It

[Control how tabular information displays](../../../using-processmaker/control-how-requests-display-in-a-tab.md), including how to sort columns or how many items display per page.
{% endhint %}

## Related Topics

{% page-ref page="../what-is-client-authentication.md" %}

{% page-ref page="edit-a-client-authentication-key.md" %}

{% page-ref page="delete-a-client-authentication-key.md" %}

{% page-ref page="delete-a-client-authentication-key.md" %}
