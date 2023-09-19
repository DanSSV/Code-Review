

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TriSakay | Forgot Password</title>
    <?php
    $imagePath = "img/Logo_Nobg.png";
    ?>
    <link rel="icon" href="<?php echo $imagePath; ?>" type="image/png" />
    <?php
    include 'php/dependencies.php';
    ?>
    <link rel="stylesheet" href="css/login.css" />
    <style>
        body{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1671%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cuse xlink:href='%23SvgjsG1680' transform='translate(0%2c 0)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1680' transform='translate(1140%2c 0)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1671'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cg id='SvgjsG1678'%3e%3cpath d='M8.541 10.856h1.001v1H8.541zM8.243 14.859H10.041v-2.002h-2.001v2.002h0.201z'%3e%3c/path%3e%3cpath d='M14.225 9.282V3.277l-2.788 1.716v2.573h-1.067V4.125h-1.293V1.132h-3.432v4.899h-1.716v-1.682L2.536 3.492 1.142 4.349v3.003H0.07v7.507h3.216V9.103a1.501 1.501 0 0 1 3.004 0v1.184l-1.131 2.874h0.702v1.698h0.429v-2.127h-0.501l0.844-2.146 2.408-0.982 2.409 0.982 0.845 2.146h-0.501v2.127h0.846l2.872-0.001V9.282h-1.287z'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1672'%3e%3cpath d='M13.828 10.843V16H9.151V13.513c0-1.275-1.154-1.693-1.154-1.693s-1.154 0.418-1.154 1.693V16H2.24V10.843l3.881-1.874V3.994L8.032 0l1.914 3.994v4.975L13.828 10.843zM7.374 5.885v1.052h1.311v-1.053c0-1.056-0.656-1.402-0.656-1.401s-0.655 0.346-0.655 1.401z'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1673'%3e%3cpath d='M14.225 3.277L11.437 4.993v2.573h-1.067V4.125h-1.292V1.133h-3.432v4.899h-1.716v-1.683L2.536 3.492 1.142 4.349v3.003H0.07v7.507l15.442-0.001V9.282h-1.287V3.277z' fill-rule='evenodd'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1675'%3e%3cpath d='M8.828 1.361C8.627 0.58 7.913 0 7.069 0 6.062 0 5.248 0.81 5.248 1.815c0 0.17 0.02 0.324 0.063 0.477h0.73c0.054 0.126 0.112 0.198 0.112 0.198a1.216 1.216 0 0 0 0.999 0.522 1.222 1.222 0 0 0 1.223-1.222c0-0.155 0.04-0.295-0.026-0.428h0.48v-0.001z m-0.051 10.853c-0.191 0.195-0.454 0.342-0.752 0.343V8.603l2.737-0.787 0.685 1.351L8.777 12.214z'%3e%3c/path%3e%3cpath d='M6.48 3.166a0.979 0.979 0 0 0-0.735-0.327c-0.311 0-0.59 0.144-0.769 0.37l-2.171 3.318a0.972 0.972 0 0 0-0.139 0.504 0.984 0.984 0 0 0 0.436 0.819l2.914 1.617V12.218A0.705 0.705 0 0 0 6.72 12.924c0.387 0 0.703-0.316 0.703-0.706V8.782s0.093-0.547-0.529-0.847l-1.817-0.95 1.324-2.022 0.703 1.104c0.14 0.222 0.33 0.31 0.502 0.306l1.806-0.006c0.734 0 0.734-0.954 0-0.951H7.949L6.48 3.166z m7.985 4.511c0.029 0.028 0.047 0.064 0.047 0.11 0 0.086-0.074 0.159-0.16 0.159-0.024 0-0.04 0-0.058-0.007-0.312-0.133-0.51-0.216-0.872-0.216-0.241 0-0.536 0.083-0.878 0.362l-0.317-0.626c0.395-0.119 0.72-0.224 1.058-0.224 0.541 0 0.826 0.112 1.178 0.444z'%3e%3c/path%3e%3cpath d='M2.349 8.158l3.058 1.687 0.007 0.677L1.922 8.599c-0.253-0.13-0.593-0.206-0.834-0.207-0.361 0-0.56 0.083-0.87 0.217-0.019 0.007-0.035 0.007-0.058 0.007A0.161 0.161 0 0 1 0 8.458c0-0.047 0.018-0.083 0.047-0.111 0.354-0.332 0.715-0.444 1.256-0.444 0.277 0 0.614 0.032 1.048 0.256z m0.283 6.204c0.996 0 1.803-0.807 1.804-1.805S3.629 10.752 2.632 10.752c-0.996 0-1.803 0.806-1.802 1.805 0 0.997 0.807 1.805 1.803 1.805zM0.031 12.557c0-1.437 1.166-2.605 2.601-2.605 1.44 0 2.605 1.167 2.605 2.605 0 1.437-1.165 2.604-2.605 2.604C1.197 15.161 0.031 13.994 0.031 12.557z m13.364 1.805A1.803 1.803 0 0 0 15.2 12.557 1.804 1.804 0 0 0 13.395 10.752c-0.993 0-1.8 0.807-1.801 1.805 0 0.998 0.807 1.805 1.801 1.805z m-2.6-1.805c0-1.437 1.163-2.605 2.6-2.605C14.832 9.952 16 11.12 16 12.557s-1.168 2.604-2.605 2.603c-1.437 0-2.6-1.166-2.6-2.603z m2.027-2.975L11.558 7.053a0.981 0.981 0 0 0-0.86-0.512h-0.824a0.293 0.293 0 0 0-0.291 0.295c0 0.163 0.13 0.292 0.292 0.292l0.825-0.005c0.14 0 0.295 0.094 0.353 0.23l1.191 2.429 0.58-0.201z'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1679'%3e%3cpath d='M14.159 8.927V5.732c0-0.453 0.371-0.822 0.828-0.822a0.822 0.822 0 0 1 0.821 0.822V10.107c0 0.605-0.218 1.189-0.608 1.646L12.472 14.65c-0.271 0.255-0.337 0.481-0.337 0.823V16h-2.97l-0.003-1.255c0-0.478-0.039-1.117 0.559-1.743l3.462-3.476a0.654 0.654 0 0 1 0.456-0.184 0.657 0.657 0 0 1 0.657 0.655c0 0.156-0.055 0.308-0.156 0.427l-1.67 1.789c-0.108 0.127-0.291 0.366-0.382 0.659-0.049 0.152-0.063 0.301-0.066 0.47h0.537c0.002-0.121 0.011-0.218 0.04-0.308 0.053-0.169 0.157-0.321 0.237-0.419l1.694-1.86c0.213-0.215 0.33-0.493 0.33-0.786 0-0.439-0.264-0.843-0.7-1.042z m-12.51 0V5.732c0-0.453-0.371-0.822-0.827-0.822A0.822 0.822 0 0 0 0 5.732V10.107c0 0.605 0.218 1.189 0.608 1.646l2.729 2.897c0.27 0.255 0.337 0.481 0.337 0.822V16h2.969l0.003-1.255c0-0.478 0.039-1.117-0.559-1.743L2.626 9.526a0.654 0.654 0 0 0-0.457-0.184 0.657 0.657 0 0 0-0.5 1.083l1.669 1.788c0.108 0.127 0.291 0.366 0.382 0.659 0.049 0.152 0.063 0.301 0.066 0.471h-0.537c-0.002-0.121-0.011-0.219-0.04-0.309-0.053-0.169-0.157-0.321-0.236-0.418L1.278 10.755c-0.213-0.215-0.33-0.493-0.33-0.786 0-0.439 0.264-0.843 0.701-1.042z m6.568-7.512a0.705 0.705 0 0 0 0-1.41 0.705 0.705 0 0 0 0 1.41z m-3.825 0.004c-0.395 0-0.715-0.317-0.715-0.71 0-0.392 0.32-0.709 0.715-0.709s0.716 0.317 0.716 0.709c0 0.393-0.321 0.71-0.716 0.71z'%3e%3c/path%3e%3cpath d='M11.225 3.646a0.494 0.494 0 1 0 0.988 0 0.494 0.494 0 1 0-0.988 0'%3e%3c/path%3e%3cpath d='M12.435 4.384h-1.334c-0.006 0-0.446-0.04-0.446-0.04l-0.559-1.947c-0.225-0.784-0.883-0.76-0.882-0.76h-1.808s-0.657-0.024-0.882 0.76l-0.276 0.959-0.275-0.959c-0.226-0.784-0.882-0.76-0.881-0.76H3.693s-0.658-0.024-0.883 0.76l-0.563 1.962c-0.053 0.184 0.047 0.323 0.208 0.369 0.16 0.046 0.324-0.035 0.365-0.181l0.549-1.913 0.267 0L2.835 5.946h0.708v2.352c0 0.194 0.156 0.352 0.35 0.351 0.194 0 0.352-0.158 0.352-0.351v-2.352h0.297v2.352c0 0.194 0.156 0.352 0.35 0.351a0.352 0.352 0 0 0 0.352-0.351v-2.352h0.696l-0.793-3.312 0.266 0.001 0.543 1.892c0.009 0.032 0.023 0.062 0.042 0.087 0.053 0.08 0.146 0.125 0.249 0.122 0.103 0.003 0.195-0.041 0.249-0.12 0.022-0.028 0.037-0.061 0.046-0.098l0.54-1.884 0.246 0v5.595a0.415 0.415 0 0 0 0.415 0.414 0.413 0.413 0 0 0 0.413-0.414V5.046h0.306v3.183a0.413 0.413 0 0 0 0.413 0.414 0.415 0.415 0 0 0 0.417-0.414v-5.595l0.267 0 0.525 1.913c0.028 0.094 0.107 0.156 0.202 0.18 0.004 0.001 0.006 0.003 0.009 0.004 0.083 0.019 0.469 0.128 0.753 0.209v3.47a0.291 0.291 0 0 0 0.581 0V6.676h0.228v1.734c0 0.16 0.13 0.29 0.29 0.29s0.292-0.13 0.292-0.29v-3.242h0.223v1.098c0 0.12 0.098 0.218 0.217 0.218 0.119 0 0.214-0.097 0.214-0.218v-1.249c0-0.35-0.308-0.634-0.658-0.634z'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1676'%3e%3cpath d='M11.675 13.031H3.563V2.436h8.112v10.595z m-4.054 1.54a0.457 0.457 0 1 1 0-0.912 0.457 0.457 0 0 1 0 0.912zM6.921 1.287h1.395c0.196 0 0.196 0.356 0 0.356h-1.397c-0.199 0-0.199-0.356 0-0.356zM11.495 0.409H3.744C3.413 0.409 3.143 0.761 3.143 1.191V14.276c0 0.427 0.267 0.779 0.601 0.778h7.751c0.332 0 0.604-0.35 0.605-0.778V1.191c0-0.432-0.272-0.782-0.605-0.782z' fill-rule='evenodd'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1674'%3e%3cpath d='M12.655 5.134V3.126H12.472c-0.55 0-0.993 0.45-0.993 1.004 0 0.556 0.443 1.003 0.993 1.004h0.183z m-1.497-0.458L10.29 2.924C10.097 2.563 9.724 2.32 9.287 2.32h-2.014C7.083 2.32 6.933 2.474 6.933 2.665c0 0.189 0.15 0.343 0.339 0.343l2.015-0.001c0.164 0 0.345 0.112 0.416 0.268l0.553 1.119 0.901 0.284z m4.002 1.877c0.262 0.075 0.454 0.322 0.454 0.61l-1.466 0.002c-1.931 0-3.499 1.587-3.499 3.539H5.872c0-1.569-1.01-2.898-2.404-3.364L0.835 6.464l0.436-0.674a0.865 0.865 0 0 1 0.724-0.391c0.068 0 0.131 0.006 0.187 0.018l5.864 1.838a0.771 0.771 0 0 0 0.227 0.036c0.265 0 0.496-0.136 0.633-0.343l1.333-1.948 4.921 1.554z'%3e%3c/path%3e%3cpath d='M13.617 12.22c0.496 0 0.893-0.406 0.893-0.901 0-0.501-0.398-0.903-0.893-0.903-0.49 0-0.887 0.402-0.887 0.903 0 0.495 0.398 0.901 0.887 0.901M11.232 11.319c0-1.335 1.068-2.411 2.385-2.411C14.931 8.908 16 9.984 16 11.319c0 1.331-1.069 2.411-2.383 2.411-1.316 0-2.385-1.08-2.385-2.411m-8.603 0.733c0.538 0 0.979-0.442 0.979-0.99 0-0.548-0.442-0.992-0.979-0.991-0.544 0-0.981 0.443-0.981 0.991 0 0.548 0.437 0.99 0.981 0.99M0 11.06c0-1.461 1.174-2.65 2.623-2.65 1.451 0 2.621 1.189 2.621 2.65 0 1.465-1.17 2.654-2.621 2.654C1.174 13.714 0 12.525 0 11.06'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1677'%3e%3cpath d='M12.676 8.32c-1.028 0-1.863 0.836-1.864 1.867 0 1.031 0.836 1.86 1.867 1.859S14.542 11.218 14.542 10.187c0-1.031-0.836-1.867-1.866-1.867M1.982 10.578c0.185 0.832 0.93 1.484 1.821 1.484 0.9 0 1.653-0.64 1.825-1.486H1.982z' fill-rule='evenodd'%3e%3c/path%3e%3cpath d='M14.32 8.213c-0.332-1.502-1.822-1.333-1.822-1.333l-0.454-1.458c-0.014-0.062 0.076-0.089 0.077-0.089l0.768-0.231-0.107-1.081L11.881 3.947C11.623 3.973 11.563 3.733 11.563 3.733l-0.107-0.373C11.383 3.07 11.129 3.102 11.129 3.102H9.333c-0.256 0.19 0.044 0.343 0.045 0.343h1.102c0.103-0.018 0.164 0.107 0.164 0.107l0.604 3.627c-1.358 0.907-1.582 1.959-1.582 1.959H7.614c-1.28-0.965-0.711-2.35-0.711-2.35h0.498v-1.007H0.88v1.007h0.996c-1.387 1.326-1.28 3.285-1.28 3.285h9.656A2.428 2.428 0 0 1 14.222 8.309s0.142 0.103 0.098-0.097' fill-rule='evenodd'%3e%3c/path%3e%3c/g%3e%3cg id='SvgjsG1680'%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(0%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1673' transform='translate(0%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(0%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1675' transform='translate(0%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1676' transform='translate(0%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1677' transform='translate(114%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(114%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1673' transform='translate(114%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(114%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(114%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1679' transform='translate(228%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1675' transform='translate(228%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1679' transform='translate(228%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1676' transform='translate(228%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(228%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(342%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(342%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1673' transform='translate(342%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(342%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(342%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(456%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1679' transform='translate(456%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(456%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(456%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1673' transform='translate(456%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(570%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(570%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1678' transform='translate(570%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1679' transform='translate(570%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(570%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(684%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1675' transform='translate(684%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1679' transform='translate(684%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(684%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(684%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(798%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(798%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1676' transform='translate(798%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1675' transform='translate(798%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(798%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(912%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1679' transform='translate(912%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1674' transform='translate(912%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1673' transform='translate(912%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1676' transform='translate(912%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1673' transform='translate(1026%2c 0) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1676' transform='translate(1026%2c 114) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1675' transform='translate(1026%2c 228) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1675' transform='translate(1026%2c 342) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsG1672' transform='translate(1026%2c 456) scale(3)' fill='rgba(3%2c 57%2c 87%2c 1)'%3e%3c/use%3e%3c/g%3e%3c/defs%3e%3c/svg%3e");
  background-repeat: repeat;
  background-size: cover;

        }
        h4{
  color: white;
  text-align: center;
  margin-top: 200px;
}
.input-box{
  margin-top: 20px;
}
    </style>
</head>

<body>
    
        
    
    <h4 style="color: white">Enter 6 digit codes receive on your email.
    </h4>

    <div class="error-container">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error-message">Invalid username or password. Please try again.</p>';
        }
        ?>
    </div>
    <div class="container2">
        <form action="login_back.php" method="POST">
            <div class="container d-flex justify-content-center">
                <div class="input-box">
                    <div class="input-field">
                        <input type="text" class="input" id="username" name="username" required autocomplete="off" />
                        <label for="username"><i class="fa-solid fa-lock fa-lg" style="color: #ffffff;"></i>
                            6 Digit code</label>
                    </div>



                </div>
            </div>
        </form>



        <!-- <a href="guest/guest.php" class="btn btn-default custom-btn1">Guest Access</a> -->
        <a href="guest/guest.php" id="guest-access-button" class="btn btn-default custom-btn1">Continue</a>

</body>

</html>