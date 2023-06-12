load datareal
X1 = f;                            % original data

N = size(f,1);                     % number of samples


disp('Original:'); howis(X1)       % original set of features
enterpause

op.m = 10;                         % 10 features will be selected
op.show = 1;                       % display results
op.b.name = 'fisher';              % SFS with fisher criterion
s1 = Bfs_sfs(X1,d,op);             % index of selected features
X1s = X1(:,s1);                    % selected features

itrain = 1:2:N;
itest  = 2:2:N;


opknn.k = 1;
d1 = Bcl_knn(X1s(itrain,:),d(itrain),X1s(itest,:),opknn);   % knn with 1 neighbors
p1 = Bev_performance(d1,d(itest)) % performance on test data

enterpause


s = Bfs_clean(X1,1);               % index of selected features
X2 = X1(:,s);                      % cleaned features
disp('Cleaned:'); howis(X2)        % set of selecte features
enterpause
s2 = Bfs_sfs(X2,d,op);             % index of selected features
X2s = X2(:,s2);                    % selected features

d2 = Bcl_knn(X2s(itrain,:),d(itrain),X2s(itest,:),opknn);   % knn with 1 neighbors


p2 = Bev_performance(d2,d(itest)) % performance on test data



