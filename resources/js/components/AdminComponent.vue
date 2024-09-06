<template>
    <div class="tw-container tw-mx-auto tw-px-4">
      <div class="tw-flex tw-justify-center">
        <div class="tw-w-full md:tw-w-2/3 lg:tw-w-1/2">
          <div class="tw-bg-white tw-shadow-md tw-rounded-lg tw-overflow-hidden">
            <div class="tw-bg-gray-100 tw-px-4 tw-py-2 tw-border-b tw-border-gray-200">
              {{ header }}
            </div>
            <div class="tw-p-4">
              {{ body }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  const header = "Admin"
  const body = "Contenido del Administrador"
  </script>