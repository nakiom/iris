<template>
    <tr>
    	<td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              	<div class="flex-shrink-0 h-10 w-10">
                	<img class="h-10 w-10 rounded-full" :src="user.profile_photo_url" :alt="user.name">
              	</div>
              	<div class="ml-4">
                	<div class="text-sm font-medium text-gray-900">
                  		<strong v-text="user.name"></strong>
                	</div>
                	<div class="text-sm text-gray-500">
                  		<span v-text="user.email"></span> <small class="px-2 inline-flex text-xs leading-5 rounded-full" :class="emailVerifiedClasses" v-text="emailVerifiedText"></small>
                	</div>
             	</div>
            </div>
    	</td>
      	<td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
        	<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                <!-- {{ $user->roles->implode('name',', ') }} -->
        	</span>
      	</td>
    	<td class="px-6 py-4 whitespace-nowrap">
        	<div class="text-sm text-gray-900">
                <span v-text="user.created_at"></span>
            </div>
        	<div class="text-sm text-gray-500">
        		<small v-text="user.created_at"></small>
        	</div>
    	</td>
      	<td class="px-6 py-4 flex space-x-3 mb-4 font-medium whitespace-nowrap text-right text-xs font-medium">
            <!-- @can('view',$user)
            <a href="{{ route('users.show',$user) }}" class="font-xs flex items-center justify-center">
                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </a>
            @endcan
            @can('update',$user)
            <a href="{{ route('users.edit',$user) }}" class="font-xs flex items-center justify-center">
                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
            @endcan
            @can('destroy',$user)
            <a href="#{{ route('users.destroy',$user) }}" class="font-xs flex items-center justify-center">
                <svg class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </a>
            @endcan -->
      	</td>
    </tr>
</template>

<script>
    export default {
        props: [
            'user'
        ],
        data() {
            return {
            }
        },
        computed: {
            emailVerifiedClasses() {
                return this.user.email_verified_at 
                    ? 'bg-green-100 text-green-800' 
                    : 'bg-red-100 text-red-800'
            },
            emailVerifiedText() {
                return this.user.email_verified_at 
                    ? 'Validado' 
                    : 'Sin Validar'
            },
        }
    }
</script>