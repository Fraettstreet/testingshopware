<?php

namespace ContainerFxfaa0e;


include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Client.php';
class Client_dba3ed3 extends \Elasticsearch\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        'transport' => true,
    ];
    public function bulk(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'bulk', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->bulk($params);
    }
    public function clearScroll(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'clearScroll', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->clearScroll($params);
    }
    public function closePointInTime(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'closePointInTime', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->closePointInTime($params);
    }
    public function count(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'count', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->count($params);
    }
    public function create(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'create', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->create($params);
    }
    public function delete(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'delete', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->delete($params);
    }
    public function deleteByQuery(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'deleteByQuery', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->deleteByQuery($params);
    }
    public function deleteByQueryRethrottle(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'deleteByQueryRethrottle', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->deleteByQueryRethrottle($params);
    }
    public function deleteScript(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'deleteScript', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->deleteScript($params);
    }
    public function exists(array $params = []) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'exists', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->exists($params);
    }
    public function existsSource(array $params = []) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'existsSource', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->existsSource($params);
    }
    public function explain(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'explain', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->explain($params);
    }
    public function fieldCaps(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'fieldCaps', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->fieldCaps($params);
    }
    public function get(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'get', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->get($params);
    }
    public function getScript(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getScript', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getScript($params);
    }
    public function getScriptContext(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getScriptContext', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getScriptContext($params);
    }
    public function getScriptLanguages(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getScriptLanguages', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getScriptLanguages($params);
    }
    public function getSource(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getSource', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getSource($params);
    }
    public function index(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'index', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->index($params);
    }
    public function info(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'info', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->info($params);
    }
    public function mget(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'mget', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->mget($params);
    }
    public function msearch(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'msearch', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->msearch($params);
    }
    public function msearchTemplate(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'msearchTemplate', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->msearchTemplate($params);
    }
    public function mtermvectors(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'mtermvectors', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->mtermvectors($params);
    }
    public function openPointInTime(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'openPointInTime', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->openPointInTime($params);
    }
    public function ping(array $params = []) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'ping', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->ping($params);
    }
    public function putScript(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'putScript', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->putScript($params);
    }
    public function rankEval(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'rankEval', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->rankEval($params);
    }
    public function reindex(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'reindex', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->reindex($params);
    }
    public function reindexRethrottle(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'reindexRethrottle', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->reindexRethrottle($params);
    }
    public function renderSearchTemplate(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'renderSearchTemplate', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->renderSearchTemplate($params);
    }
    public function scriptsPainlessExecute(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'scriptsPainlessExecute', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->scriptsPainlessExecute($params);
    }
    public function scroll(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'scroll', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->scroll($params);
    }
    public function search(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'search', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->search($params);
    }
    public function searchMvt(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'searchMvt', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->searchMvt($params);
    }
    public function searchShards(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'searchShards', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->searchShards($params);
    }
    public function searchTemplate(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'searchTemplate', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->searchTemplate($params);
    }
    public function termsEnum(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'termsEnum', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->termsEnum($params);
    }
    public function termvectors(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'termvectors', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->termvectors($params);
    }
    public function update(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'update', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->update($params);
    }
    public function updateByQuery(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'updateByQuery', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->updateByQuery($params);
    }
    public function updateByQueryRethrottle(array $params = [])
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'updateByQueryRethrottle', array('params' => $params), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->updateByQueryRethrottle($params);
    }
    public function asyncSearch() : \Elasticsearch\Namespaces\AsyncSearchNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'asyncSearch', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->asyncSearch();
    }
    public function autoscaling() : \Elasticsearch\Namespaces\AutoscalingNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'autoscaling', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->autoscaling();
    }
    public function cat() : \Elasticsearch\Namespaces\CatNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'cat', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->cat();
    }
    public function ccr() : \Elasticsearch\Namespaces\CcrNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'ccr', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->ccr();
    }
    public function cluster() : \Elasticsearch\Namespaces\ClusterNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'cluster', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->cluster();
    }
    public function danglingIndices() : \Elasticsearch\Namespaces\DanglingIndicesNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'danglingIndices', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->danglingIndices();
    }
    public function dataFrameTransformDeprecated() : \Elasticsearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'dataFrameTransformDeprecated', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->dataFrameTransformDeprecated();
    }
    public function enrich() : \Elasticsearch\Namespaces\EnrichNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'enrich', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->enrich();
    }
    public function eql() : \Elasticsearch\Namespaces\EqlNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'eql', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->eql();
    }
    public function features() : \Elasticsearch\Namespaces\FeaturesNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'features', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->features();
    }
    public function fleet() : \Elasticsearch\Namespaces\FleetNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'fleet', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->fleet();
    }
    public function graph() : \Elasticsearch\Namespaces\GraphNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'graph', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->graph();
    }
    public function ilm() : \Elasticsearch\Namespaces\IlmNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'ilm', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->ilm();
    }
    public function indices() : \Elasticsearch\Namespaces\IndicesNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'indices', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->indices();
    }
    public function ingest() : \Elasticsearch\Namespaces\IngestNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'ingest', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->ingest();
    }
    public function license() : \Elasticsearch\Namespaces\LicenseNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'license', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->license();
    }
    public function logstash() : \Elasticsearch\Namespaces\LogstashNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'logstash', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->logstash();
    }
    public function migration() : \Elasticsearch\Namespaces\MigrationNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'migration', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->migration();
    }
    public function ml() : \Elasticsearch\Namespaces\MlNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'ml', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->ml();
    }
    public function monitoring() : \Elasticsearch\Namespaces\MonitoringNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'monitoring', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->monitoring();
    }
    public function nodes() : \Elasticsearch\Namespaces\NodesNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'nodes', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->nodes();
    }
    public function rollup() : \Elasticsearch\Namespaces\RollupNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'rollup', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->rollup();
    }
    public function searchableSnapshots() : \Elasticsearch\Namespaces\SearchableSnapshotsNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'searchableSnapshots', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->searchableSnapshots();
    }
    public function security() : \Elasticsearch\Namespaces\SecurityNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'security', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->security();
    }
    public function shutdown() : \Elasticsearch\Namespaces\ShutdownNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'shutdown', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->shutdown();
    }
    public function slm() : \Elasticsearch\Namespaces\SlmNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'slm', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->slm();
    }
    public function snapshot() : \Elasticsearch\Namespaces\SnapshotNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'snapshot', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->snapshot();
    }
    public function sql() : \Elasticsearch\Namespaces\SqlNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'sql', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->sql();
    }
    public function ssl() : \Elasticsearch\Namespaces\SslNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'ssl', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->ssl();
    }
    public function tasks() : \Elasticsearch\Namespaces\TasksNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'tasks', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->tasks();
    }
    public function textStructure() : \Elasticsearch\Namespaces\TextStructureNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'textStructure', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->textStructure();
    }
    public function transform() : \Elasticsearch\Namespaces\TransformNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'transform', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->transform();
    }
    public function watcher() : \Elasticsearch\Namespaces\WatcherNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'watcher', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->watcher();
    }
    public function xpack() : \Elasticsearch\Namespaces\XpackNamespace
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'xpack', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->xpack();
    }
    public function __call(string $name, array $arguments)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__call', array('name' => $name, 'arguments' => $arguments), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->__call($name, $arguments);
    }
    public function extractArgument(array &$params, string $arg)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'extractArgument', array('params' => $params, 'arg' => $arg), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->extractArgument($params, $arg);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->transport, $instance->params, $instance->endpoints, $instance->registeredNamespaces, $instance->asyncSearch, $instance->autoscaling, $instance->cat, $instance->ccr, $instance->cluster, $instance->danglingIndices, $instance->dataFrameTransformDeprecated, $instance->enrich, $instance->eql, $instance->features, $instance->fleet, $instance->graph, $instance->ilm, $instance->indices, $instance->ingest, $instance->license, $instance->logstash, $instance->migration, $instance->ml, $instance->monitoring, $instance->nodes, $instance->rollup, $instance->searchableSnapshots, $instance->security, $instance->shutdown, $instance->slm, $instance->snapshot, $instance->sql, $instance->ssl, $instance->tasks, $instance->textStructure, $instance->transform, $instance->watcher, $instance->xpack);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function __construct(\Elasticsearch\Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        static $reflection;
        if (! $this->valueHolder011af) {
            $reflection = $reflection ?? new \ReflectionClass('Elasticsearch\\Client');
            $this->valueHolder011af = $reflection->newInstanceWithoutConstructor();
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
        }
        $this->valueHolder011af->__construct($transport, $endpoint, $registeredNamespaces);
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return ($this->valueHolder011af->$name = $value);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return isset($this->valueHolder011af->$name);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            unset($this->valueHolder011af->$name);
            return;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('Client_dba3ed3', false)) {
    \class_alias(__NAMESPACE__.'\\Client_dba3ed3', 'Client_dba3ed3', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';
class CommandExecutor_2fbbc6d extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        
    ];
    public function require(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'require', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->require($pluginComposerName, $pluginName);
return;
    }
    public function remove(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'remove', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->remove($pluginComposerName, $pluginName);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $instance, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($instance);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function __construct(string $projectDir)
    {
        static $reflection;
        if (! $this->valueHolder011af) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
            $this->valueHolder011af = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
        }
        $this->valueHolder011af->__construct($projectDir);
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('CommandExecutor_2fbbc6d', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutor_2fbbc6d', 'CommandExecutor_2fbbc6d', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';
class StoreService_93b91c4 extends \Shopware\Core\Framework\Store\Services\StoreService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        
    ];
    public function fireTrackingEvent(string $eventName, array $additionalData = []) : ?array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'fireTrackingEvent', array('eventName' => $eventName, 'additionalData' => $additionalData), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->fireTrackingEvent($eventName, $additionalData);
    }
    public function getLanguageByContext(\Shopware\Core\Framework\Context $context) : string
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getLanguageByContext', array('context' => $context), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getLanguageByContext($context);
    }
    public function updateStoreToken(\Shopware\Core\Framework\Context $context, \Shopware\Core\Framework\Store\Struct\AccessTokenStruct $accessToken) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'updateStoreToken', array('context' => $context, 'accessToken' => $accessToken), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->updateStoreToken($context, $accessToken);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->userRepository, $instance->trackingEventClient);
        }, $instance, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($instance);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->userRepository, $instance->trackingEventClient);
        }, $this, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('StoreService_93b91c4', false)) {
    \class_alias(__NAMESPACE__.'\\StoreService_93b91c4', 'StoreService_93b91c4', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';
class HookableEventFactory_f62e15e extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        
    ];
    public function createHookablesFor($event) : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'createHookablesFor', array('event' => $event), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->createHookablesFor($event);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $instance, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($instance);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Core\Framework\Webhook\BusinessEventEncoder $eventEncoder, \Shopware\Core\Framework\Webhook\Hookable\WriteResultMerger $writeResultMerger)
    {
        static $reflection;
        if (! $this->valueHolder011af) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
            $this->valueHolder011af = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
        }
        $this->valueHolder011af->__construct($eventEncoder, $writeResultMerger);
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('HookableEventFactory_f62e15e', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactory_f62e15e', 'HookableEventFactory_f62e15e', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CloneTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/JsonSerializableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/AssignArrayTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CreateFromTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/VariablesAccessTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Struct.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/Files/SnippetFileCollection.php';
class SnippetFileCollection_08f09cc extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        
    ];
    public function add($snippetFile) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'add', array('snippetFile' => $snippetFile), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->add($snippetFile);
return;
    }
    public function get($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'get', array('key' => $key), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->get($key);
    }
    public function getByName($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getByName', array('key' => $key), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getByName($key);
    }
    public function getFilesArray(bool $isBase = true) : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getFilesArray', array('isBase' => $isBase), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getFilesArray($isBase);
    }
    public function toArray() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'toArray', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->toArray();
    }
    public function getIsoList() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getIsoList', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getIsoList();
    }
    public function getSnippetFilesByIso(string $iso) : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getSnippetFilesByIso', array('iso' => $iso), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getSnippetFilesByIso($iso);
    }
    public function getBaseFileByIso(string $iso) : \Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getBaseFileByIso', array('iso' => $iso), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getBaseFileByIso($iso);
    }
    public function getApiAlias() : string
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getApiAlias', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getApiAlias();
    }
    public function hasFileForPath(string $filePath) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'hasFileForPath', array('filePath' => $filePath), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->hasFileForPath($filePath);
    }
    public function set($key, $element) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'set', array('key' => $key, 'element' => $element), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->set($key, $element);
return;
    }
    public function clear() : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'clear', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->clear();
return;
    }
    public function count() : int
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'count', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->count();
    }
    public function getKeys() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getKeys', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getKeys();
    }
    public function has($key) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'has', array('key' => $key), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->has($key);
    }
    public function map(\Closure $closure) : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'map', array('closure' => $closure), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->map($closure);
    }
    public function reduce(\Closure $closure, $initial = null)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'reduce', array('closure' => $closure, 'initial' => $initial), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->reduce($closure, $initial);
    }
    public function fmap(\Closure $closure) : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'fmap', array('closure' => $closure), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->fmap($closure);
    }
    public function sort(\Closure $closure) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'sort', array('closure' => $closure), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->sort($closure);
return;
    }
    public function filterInstance(string $class)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'filterInstance', array('class' => $class), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->filterInstance($class);
    }
    public function filter(\Closure $closure)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'filter', array('closure' => $closure), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->filter($closure);
    }
    public function slice(int $offset, ?int $length = null)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'slice', array('offset' => $offset, 'length' => $length), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->slice($offset, $length);
    }
    public function getElements() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getElements', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getElements();
    }
    public function jsonSerialize() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'jsonSerialize', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->jsonSerialize();
    }
    public function first()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'first', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->first();
    }
    public function getAt(int $position)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getAt', array('position' => $position), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getAt($position);
    }
    public function last()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'last', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->last();
    }
    public function remove($key) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'remove', array('key' => $key), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->remove($key);
return;
    }
    public function getIterator() : \Generator
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getIterator', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getIterator();
    }
    public function assign(array $options)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'assign', array('options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->assign($options);
    }
    public function addExtension(string $name, ?\Shopware\Core\Framework\Struct\Struct $extension) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'addExtension', array('name' => $name, 'extension' => $extension), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->addExtension($name, $extension);
return;
    }
    public function addArrayExtension(string $name, array $extension) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'addArrayExtension', array('name' => $name, 'extension' => $extension), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->addArrayExtension($name, $extension);
return;
    }
    public function addExtensions(array $extensions) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'addExtensions', array('extensions' => $extensions), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->addExtensions($extensions);
return;
    }
    public function getExtension(string $name) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getExtension', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getExtension($name);
    }
    public function getExtensionOfType(string $name, string $type) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getExtensionOfType', array('name' => $name, 'type' => $type), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getExtensionOfType($name, $type);
    }
    public function hasExtension(string $name) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'hasExtension', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->hasExtension($name);
    }
    public function hasExtensionOfType(string $name, string $type) : bool
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'hasExtensionOfType', array('name' => $name, 'type' => $type), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->hasExtensionOfType($name, $type);
    }
    public function getExtensions() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getExtensions', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getExtensions();
    }
    public function setExtensions(array $extensions) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'setExtensions', array('extensions' => $extensions), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->setExtensions($extensions);
return;
    }
    public function removeExtension(string $name) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'removeExtension', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->removeExtension($name);
return;
    }
    public function getVars() : array
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getVars', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getVars();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->elements, $instance->extensions);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function __construct(iterable $elements = [])
    {
        static $reflection;
        if (! $this->valueHolder011af) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
            $this->valueHolder011af = $reflection->newInstanceWithoutConstructor();
        unset($this->elements, $this->extensions);
        }
        $this->valueHolder011af->__construct($elements);
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        unset($this->elements, $this->extensions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('SnippetFileCollection_08f09cc', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollection_08f09cc', 'SnippetFileCollection_08f09cc', false);
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/StorefrontController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/ErrorController.php';
class ErrorController_b437ad9 extends \Shopware\Storefront\Controller\ErrorController implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        
    ];
    public function error(\Throwable $exception, \Symfony\Component\HttpFoundation\Request $request, \Shopware\Core\System\SalesChannel\SalesChannelContext $context) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'error', array('exception' => $exception, 'request' => $request, 'context' => $context), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->error($exception, $request, $context);
    }
    public function onCaptchaFailure(\Symfony\Component\Validator\ConstraintViolationList $violations, \Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'onCaptchaFailure', array('violations' => $violations, 'request' => $request), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->onCaptchaFailure($violations, $request);
    }
    public function setTwig(\Twig\Environment $twig) : void
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'setTwig', array('twig' => $twig), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af->setTwig($twig);
return;
    }
    public function setContainer(\Psr\Container\ContainerInterface $container) : ?\Psr\Container\ContainerInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'setContainer', array('container' => $container), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->setContainer($container);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->errorTemplateResolver, $instance->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $instance, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($instance);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $instance, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($instance);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Storefront\Framework\Twig\ErrorTemplateResolver $errorTemplateResolver, \Shopware\Storefront\Pagelet\Header\HeaderPageletLoaderInterface $headerPageletLoader, \Shopware\Core\System\SystemConfig\SystemConfigService $systemConfigService, \Shopware\Storefront\Page\Navigation\Error\ErrorPageLoaderInterface $errorPageLoader, \Shopware\Storefront\Pagelet\Footer\FooterPageletLoaderInterface $footerPageletLoader)
    {
        static $reflection;
        if (! $this->valueHolder011af) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
            $this->valueHolder011af = $reflection->newInstanceWithoutConstructor();
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
        }
        $this->valueHolder011af->__construct($errorTemplateResolver, $headerPageletLoader, $systemConfigService, $errorPageLoader, $footerPageletLoader);
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('ErrorController_b437ad9', false)) {
    \class_alias(__NAMESPACE__.'\\ErrorController_b437ad9', 'ErrorController_b437ad9', false);
}

include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
class Client_b190fb5 extends \GuzzleHttp\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder011af = null;
    private $initializerbe239 = null;
    private static $publicPropertiesb522f = [
        
    ];
    public function __call($method, $args)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__call', array('method' => $method, 'args' => $args), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->__call($method, $args);
    }
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'sendAsync', array('request' => $request, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->sendAsync($request, $options);
    }
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'send', array('request' => $request, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->send($request, $options);
    }
    public function sendRequest(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'sendRequest', array('request' => $request), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->sendRequest($request);
    }
    public function requestAsync(string $method, $uri = '', array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'requestAsync', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->requestAsync($method, $uri, $options);
    }
    public function request(string $method, $uri = '', array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'request', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->request($method, $uri, $options);
    }
    public function getConfig(?string $option = null)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getConfig', array('option' => $option), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getConfig($option);
    }
    public function get($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'get', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->get($uri, $options);
    }
    public function head($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'head', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->head($uri, $options);
    }
    public function put($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'put', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->put($uri, $options);
    }
    public function post($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'post', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->post($uri, $options);
    }
    public function patch($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'patch', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->patch($uri, $options);
    }
    public function delete($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'delete', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->delete($uri, $options);
    }
    public function getAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'getAsync', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->getAsync($uri, $options);
    }
    public function headAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'headAsync', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->headAsync($uri, $options);
    }
    public function putAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'putAsync', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->putAsync($uri, $options);
    }
    public function postAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'postAsync', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->postAsync($uri, $options);
    }
    public function patchAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'patchAsync', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->patchAsync($uri, $options);
    }
    public function deleteAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'deleteAsync', array('uri' => $uri, 'options' => $options), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return $this->valueHolder011af->deleteAsync($uri, $options);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $instance, 'GuzzleHttp\\Client')->__invoke($instance);
        $instance->initializerbe239 = $initializer;
        return $instance;
    }
    public function __construct(array $config = [])
    {
        static $reflection;
        if (! $this->valueHolder011af) {
            $reflection = $reflection ?? new \ReflectionClass('GuzzleHttp\\Client');
            $this->valueHolder011af = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
        }
        $this->valueHolder011af->__construct($config);
    }
    public function & __get($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__get', ['name' => $name], $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        if (isset(self::$publicPropertiesb522f[$name])) {
            return $this->valueHolder011af->$name;
        }
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__isset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__unset', array('name' => $name), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder011af;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder011af;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__clone', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        $this->valueHolder011af = clone $this->valueHolder011af;
    }
    public function __sleep()
    {
        $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, '__sleep', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
        return array('valueHolder011af');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe239 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe239;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe239 && ($this->initializerbe239->__invoke($valueHolder011af, $this, 'initializeProxy', array(), $this->initializerbe239) || 1) && $this->valueHolder011af = $valueHolder011af;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder011af;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder011af;
    }
}

if (!\class_exists('Client_b190fb5', false)) {
    \class_alias(__NAMESPACE__.'\\Client_b190fb5', 'Client_b190fb5', false);
}
