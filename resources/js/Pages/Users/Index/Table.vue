<script setup>
	import axios from 'axios';
    import UserTableRow from '@/Pages/Users/Index/_Row.vue';
</script>

<template>
	<div class="flex flex-col">
	 	<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
		    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
		     	<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
					<div class="flex bg-white px-4 py-3 sm:px-6">
						<input 
							v-model.debounce.500ms="search" 
							@keyup.esc="erase"
							@keyup.stop="handleSearch"
							class="form-input focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10"
							type="text"
							aria-label="Filter users"
							placeholder="Buscar por nombre o email"
						>

				    	<select 
				    		v-model="pagination.per_page"
				    		@change="handleSearch"
				    		class="ml-6 focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10">
				    		<option 
				    			v-for="value in per_page_options" 
				    			:value="value"
				    			v-text="value + ' por página'"
				    		></option>
				    	</select>
					</div>

			     	<div v-if="users.length">
				        <table class="min-w-full divide-y divide-gray-200">
				        	<thead class="bg-gray-50">
					            <tr>
					              	<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					                	Name
					              	</th>
					              	<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					                	Roles
					              	</th>
					              	<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					                	Created At
					              	</th>
					              	<th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
					                	Actions
					              	</th>
					            </tr>
				        	</thead>
				        	<tbody class="bg-white divide-y divide-gray-200">
				        		<UserTableRow 
				        			v-for="user in users" 
				        			:user="user"
				        			:key="user.id"
				        		></UserTableRow>
				        	</tbody>
				        </table>

						<!-- <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
					        {{ users.links }}
				     	</div> -->
						<div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
						  	<div class="flex-1 flex justify-between sm:hidden">
						    	<a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
						    	<a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
						  	</div>
						  	<div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
						    	<div>
						      		<p class="text-sm text-gray-700">
								        Mostrando del
								        <strong class="font-medium" v-text="pagination.from + 'º'"></strong>
								        al
								        <strong class="font-medium" v-text="pagination.to + 'º'"></strong>
								        de
								        <strong class="font-medium" v-text="pagination.total"></strong>
								        resultados
						      		</p>
						    	</div>
						    	<div>
						      		<nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
										<span v-for="(link,index) in paginationLinks">
											<span v-if="index == 0">
												
								        		<a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" @click.prevent="prevPage()">
								          			<span class="sr-only">Previous</span>
										          	<!-- Heroicon name: solid/chevron-left -->
										          	<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										            	<path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
										          	</svg>
										        </a>
											</span>
											<span v-else>
												<span v-if="index == paginationLinks.length - 1">
													
													<a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" @click.prevent="nextPage()">
														<span class="sr-only">Next</span>
														<!-- Heroicon name: solid/chevron-right -->
														<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
															<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
														</svg>
													</a>
												</span>
												<span v-else>
													<span v-if="link.active">
						        						<a v-html="link.label" href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium" @click.prevent="changePage(link.label)"></a>
													</span>
													<span v-else>
														<span v-if="link.url">
						        							<a v-html="link.label" href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium" @click.prevent="changePage(link.label)"></a>
														</span>
														<span v-else>
															<span v-html="link.label" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700"></span>
														</span>
													</span>
												</span>
											</span>
										</span>
						      		</nav>
						    	</div>
						  	</div>
						</div>
			     	</div>
			     	<div v-else>
						<div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
				        	No hay resultados para la búsqueda <i v-text="search"></i> en la página {{ pagination.current_page }} al mostrar {{ pagination.per_page }} por página.
				     	</div>
			     	</div>
		     	</div>
		    </div>
	 	</div>
	</div>
</template>

<script>
	export default {
		components: {
			UserTableRow
		},
        data() {
            return {
            	search: '',
            	users: [],
            	per_page_options: [4,5,8,12,16,20],
            	pagination: {
            		current_page: 1,
            		last_page: 1,
            		from: 0,
            		to: 0,
            		total: 0,
            		per_page: 5,
            		links: [
            		],
            	},
            }
        },
	    mounted() {
	        // Fetch initial results
	        this.getResults();
	    },
	    computed: {
	        paginationLinks() {

				return this.pagination.links.map(function(link) {


		        	link.label = link.label.replace('&laquo; Anterior', '&laquo;');
		        	link.label = link.label.replace('Siguiente &raquo;', '&raquo;');

				   	return link;
				});
	        },
	    },
	    methods: {
            handleSearch() {

	        	this.pagination.current_page = 1;

	        	this.getResults();
            },
            erase() {
                this.search = '';

	        	this.pagination.current_page = 1;

	        	this.getResults();
            },
	        prevPage() {
	        	this.changePage(this.pagination.current_page - 1);
	        },
	        nextPage() {
	        	this.changePage(this.pagination.current_page + 1);
	        },
	        changePerPage() {

	        	this.pagination.current_page = 1;

	        	this.getResults();
	        },
	        changePage(page) {

	        	if ((page < 1) || (page > this.pagination.last_page)) {
	        		return;
	        	}
	        	
	        	this.pagination.current_page = page;

	        	this.getResults();
	        },
	        getResults() {
	            axios({
					method: 'get',
					url: route('api.users.index'),
					params: {
						search: this.search,
						page: this.pagination.current_page,
						per_page: this.pagination.per_page,
						sort: 'name,email',
					}
				}).then(response => {
					console.log(response)
                    this.users = response.data.data;
                    this.pagination = response.data.meta;
                });
	        }
	    }
	}
</script>